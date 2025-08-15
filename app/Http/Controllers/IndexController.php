<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Http\Controllers\Controller;

use App\Models\Address;
use App\Models\Category;
use App\Models\Document;
use App\Models\Manufacturer;
use App\Models\Order;
use App\Models\Page;
use App\Models\PriceLists;
use App\Models\Products;
use App\Models\User;
use App\Models\Setting;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use Config;

class IndexController extends Controller
{
	public $data = [

		'config' => [
			'price_ratio'        => 0,
			'transport_cost'     => 1900,
			'transport_cost_eur' => 0,

			'free_transport' => 40000,

			'admin_emails' => [
				'hegyes.bela@gmail.com',
			]
		],

		'currency'  => 'Ft',
		'eur_price' => false,

		'mainteance_mode' => false,

	];

	public $page = [

	];

	public function __construct() {

		$this->data['root_dir'] = str_replace(['\\', 'app/Http/Controllers'], ['/', ''], dirname(__FILE__));
		$this->data['app_url'] = config('APP_URL');

		$this->page = (new PageController());

		$this->data['settings'] = Setting::all()->pluck('value', 'key')->toArray();

		$this->data['manufacturers'] = Manufacturer::orderBy('sort_order')->get();
		$this->data['all_categories'] = Category::orderBy('sort_order')->get();

		$this->data['all_pages'] = Page::all();
		$this->data['all_documents'] = Document::all();
		$this->data['all_users'] = User::all();

		$this->data['manufacturer_slugs'] = [];
		foreach ($this->data['manufacturers'] as $m_obj) {
			$m_obj = $m_obj->toArray();
			$this->data['manufacturer_slugs'][$m_obj['id']] = $this->slugify($m_obj['name']);
		}

		$this->data['category_slugs'] = [];
		foreach ($this->data['all_categories'] as $m_obj) {
			$m_obj = $m_obj->toArray();
			$this->data['category_slugs'][$m_obj['id']] = $this->slugify($m_obj['name']);
		}

		if (isset($this->data['settings']['szállítási díj']))
			$this->data['config']['transport_cost'] = floatval(strip_tags($this->data['settings']['szállítási díj']));

		if (isset($this->data['settings']['ingyenes szállítás értékhatár']))
			$this->data['config']['free_transport'] = floatval(strip_tags($this->data['settings']['ingyenes szállítás értékhatár']));

		if (isset($this->data['settings']['kedvezmény (%)']))
			$this->data['config']['price_ratio'] = (int)strip_tags($this->data['settings']['kedvezmény (%)']);

		if (trim(strtolower(strip_tags($this->data['settings']['Karbantartó mód'] ?? ''))) == 'igen')
			$this->data['mainteance_mode'] = true;

		$this->data['mainteance_text'] = $this->data['settings']['Karbantartó mód szövege'] ?? 'Rendelés leadása jelenleg nem lehetséges.';

	}

	public function index(Request $request) {

		$user = Auth::user();
		if (!$user) {
			$this->data['user'] = false;
		} else {
			$this->data['user'] = $user;
		}

		$request_array = $request->toarray();

		if (isset($request_array['test'])) {

			if ($request_array['test'] == 'true') {

				setcookie('test', true, time() + 30 * 24 * 60 * 60);
				return redirect('/');

			} else {

				setcookie('test', '', time() - 3600);
				return redirect('/');

			}

		}

		if (!isset($_COOKIE['test']) && ($demo_enabled ?? false)) {

			return view('original.index', [
			]);

		}

		return view('pages.index', [
			'data' => $this->data,
			'page' => $this->page
		]);

	}

	public function page(Request $request) {

		$user = Auth::user();
		if (!$user) {
			$this->data['user'] = false;
		} else {
			$this->data['user'] = $user;
		}

		$segments = $request->segments();

		$request = $request->toArray();

		$this->data['seo_map'] = [
			'subpages' => [
				'gyartok'    => 'manufacturer-list',
				'kategoriak' => 'category-list',
				'termekek'   => 'product-list',
				'rolunk'     => 'about-us',
				'letoltesek' => 'downloadable-content',
				'kapcsolat'  => 'contact-us',
			],
		];

		if (isset($segments[0]) && isset($this->data['seo_map']['subpages'][$segments[0]]))
			$segments[0] = $this->data['seo_map']['subpages'][$segments[0]];

		if (isset($segments[1])) {
			$manufacturer_id = array_search($segments[1], $this->data['manufacturer_slugs']);
			if ($manufacturer_id)
				$request['manufacturer_id'] = $manufacturer_id;
		}

		if (isset($segments[2])) {
			$category_id = array_search($segments[2], $this->data['category_slugs']);
			if ($category_id)
				$request['category_id'] = $category_id;
		}

		$this->data['request'] = $request;

		$template = 'pages.' . ($segments[0] ?? 'index');

		if (isset($request['do_login'])) {

			$user = User::where('email', $request['email'])->first();

			if ($user) {

				if (!Hash::check($request['password'], $user->password)) {

					$this->data['error']['login'] = 'Hibás jelszó!';
					$this->data['error']['email'] = $request['email'];

				} else {

					if ($user->state == 0) {

						$this->data['error']['login'] = 'Sajnos a regisztrációja még nincs jóváhagyva.';
						$this->data['error']['email'] = $request['email'];

					} else {

						Auth::login($user, true);
						return redirect('/order');

					}

				}

			} else {

				$this->data['error']['login'] = 'Hibás E-mail cím!';

			}

		}

		if (isset($request['do_registration'])) {

			$this->data['request'] = $request;

			$exists = User::where('email', $request['email-address'])->first();

			if ($exists)
				$this->data['error']['registration'] = 'Ez az e-mail cím már foglalt!';

			if (empty($this->data['error']['registration'] ?? '')) {

				$data_map = [
					'name'      => 'username',
					'email'     => 'email-address',
					'company'   => 'company-name',
					'taxno'     => 'tax-number',
					'lastname'  => 'last-name',
					'firstname' => 'first-name',
					'phone'     => 'phone-number',
				];

				$new_user = new User();

				foreach ($data_map as $dm_k => $dm_v)
					$new_user->{$dm_k} = $request[$dm_v];

				$new_user->password = Hash::make($request['password']);

				$new_user->type = 0;
				$new_user->state = 0;

				$new_user->save();

				$new_address = new Address();

				$new_address['user_id'] = $new_user->id;

				foreach ([
									 'zip',
									 'city',
									 'address',
									 'business_type',
									 'open_times',
								 ] as $dm_k)
					$new_address->{$dm_k} = $request[$dm_k];

				$new_address->save();

				$live = true;

				if ($live ?? false) {

					$notifiable = [];
					foreach (User::where([
						['notify_registration', 1],
						['type', 1],
					])->get() as $raw) {
						$notifiable[] = $raw->email;
					}

					foreach ($notifiable as $admin_email) {

						$this->data['mail']['to'] = $admin_email;

						Mail::send(
							['html' => 'mail/registration/admin'],
							[
								'data' =>
									[
										'request' => $request,
										'user'    => $new_user
									]
							],
							function ($message) {
								$message
									->to($this->data['mail']['to'])
									->subject('Sikeres regisztráció')
									->from('info@nemoseal.hu');
							});

					}

					$this->data['mail']['to'] = $request['email-address'];

					Mail::send(
						['html' => 'mail/registration/customer'],
						[
							'data' =>
								[
									'request' => $request
								]
						],
						function ($message) {
							$message
								->to($this->data['mail']['to'])
								->subject('Sikeres regisztráció')
								->from('info@nemoseal.hu');
						});

					$this->data['sucessfull_registration'] = true;

				}

			}

		}

		if (($segments[0] ?? false) == 'order') {

			$user = Auth::user();
			if (!$user) {
				$template = 'pages.login';
			} else {
				$this->data['user'] = $user;
			}

			if (isset($user->price_lists->id)) {

				$this->data['products'] = Products::orderBy('sort_order', 'asc')->get();

				foreach ($this->data['products'] as $p_k => $p_v) {
					$this->data['products'][$p_k]->price =
						str_replace(',', '.',
							$p_v->{'price_' . Auth::user()->price_lists_id}
						);

                    $this->data['products'][$p_k]->price = floatval($this->data['products'][$p_k]->price);
				}

				if ($user->price_lists->id == 5) {
					$this->data['currency'] = 'EUR';
					$this->data['eur_price'] = true;
					$this->data['config']['transport_cost'] = $this->data['config']['transport_cost_eur'];
				};

				$this->data['products_grouped'] = [];

				foreach ($this->data['all_categories'] as $category_for_sort) {
					$this->data['products_grouped'][$category_for_sort->id] = [];
				}

				foreach ($this->data['products'] as $product) {

					if (!isset($product->category->id))
						continue;

					$category_image = empty($product->category->image ?? '') ? 'no_image.png' : $product->category->image;

					if (empty($product->image)) {
						$product->image = $category_image;
					}

					if (!isset($this->data['products_grouped'][$product->category->id]['name'])) {
						$this->data['products_grouped'][$product->category->id] = [
							'name'     => $product->category->name,
							'family'   => $product->category->family,
							'image'    => $category_image,
							'products' => [$product]
						];
					} else {
						$this->data['products_grouped'][$product->category->id]['products'][] = $product;
					}

				}

			}

			if (($request['send_order'] ?? false) == 'true') {

				$order_data = $request;
				unset($order_data['_token']);
				unset($order_data['send_order']);

				$order_data['order_products'] = json_decode($order_data['order_products'], true);

				$sum_price = 0;
				foreach ($order_data['order_products'] as $product)
					$sum_price += $product['quantity'] * floatval($product['price']);

				if ($sum_price >= $this->data['config']['free_transport'])
					$this->data['config']['transport_cost'] = 0;

				$email_data = [
					'data'           => $this->data,
					'order_data'     => $order_data,
					'order_products' => $order_data['order_products'],
					'customer'       => $user->toArray()
				];

				if (isset($test_mail)) {
					return view(
						'mail/order/admin',
						[
							'data' => $email_data
						]
					)->render();
				}

				$notifiable = [];
				foreach (User::where([
					['notify_registration', 1],
					['type', 1],
				])->get() as $raw) {
					$notifiable[] = $raw->email;
				}

				$_order = new Order;
				$_order->user_id = $user->id;
				$_order->data = json_encode($order_data);
				$_order->save();

				$pdf = $this->generate_pdf($_order->id);

				$this->data['attachment_file'] =
					$this->data['root_dir'] . 'public/storage/pdf/Rendelés_' . $_order->id . '.pdf';

				foreach ($notifiable as $admin_email) {

					$this->data['mail']['to'] = $admin_email;

					Mail::send(
						['html' => 'mail/order/admin'],
						['data' => $email_data],
						function ($message) {
							$message
								->to($this->data['mail']['to'])
								->subject('Rendelés érkezett!')
								->from('info@nemoseal.hu')
								->attach(
									$this->data['attachment_file'], [
										'as'   => 'Rendelés',
										'mime' => 'application/pdf']
								);
						});

				}

				$this->data['mail']['to'] = $user->email;

				Mail::send(
					['html' => 'mail/order/customer'],
					['data' => $email_data],
					function ($message) {
						$message
							->to($this->data['mail']['to'])
							->subject('Köszönjük megrendelését!')
							->from('info@nemoseal.hu')
							->attach(
								$this->data['attachment_file'], [
									'as'   => 'Rendelés',
									'mime' => 'application/pdf']
							);
					});

				$this->data['order_success'] = true;

				return redirect('/order?success=true');

			}

		}

		if (isset($request['manufacturer_id']))
			$this->data['manufacturer'] = Manufacturer::find($request['manufacturer_id'])->toArray();

		if (isset($request['category_id'])) {

			$this->data['category'] = Category::find($request['category_id'])->toArray();

			$this->data['products'] = Products::where([
				'category_id' => $request['category_id'],
			])->orderBy('sort_order', 'asc')->get()->toArray();

			if (isset(Auth::user()->price_lists_id)) {

				foreach ($this->data['products'] as $p_k => $p_v) {
					$this->data['products'][$p_k]['price'] = $p_v['price_' . Auth::user()->price_lists_id] ?? 0;
				}

			}

		}

		if (($segments[0] ?? false) == 'category-list') {
			$this->data['manufacturer'] = Manufacturer::find($request['manufacturer_id'])->toArray();

			$this->data['categories'] = [];
			foreach ($this->data['all_categories'] as $category_obj) {
				$category_obj = $category_obj->toArray();
				$this->data['categories'][$category_obj['id']] = $category_obj;
			};

			foreach (Products::where('manufacturer_id', $request['manufacturer_id'])->orderBy('sort_order')->get() as $m_p) {
				$this->data['categories'][$m_p->category->id]['enabled'] = true;
			}

			foreach ($this->data['categories'] as $c_key => $c_val) {
				if ($c_val['enabled'] ?? false)
					continue;
				unset($this->data['categories'][$c_key]);
			}

		}

		return view(
			View::exists($template) ? $template : 'pages.index',
			[
				'data' => $this->data,
				'page' => $this->page
			]
		);

	}

	public function oldal(Request $request) {

		$segments = $request->segments();
		$request = $request->toArray();

		if (isset($segments[1])) {
			$page = Page::where('slug', $segments[1])->first();
			$this->data['page_data'] = !is_null($page) ? $page->toArray() : [];
		}

		return view('pages.information', [
			'data' => $this->data,
			'page' => $this->page,
			'slug' => $segments[1] ?? false
		]);

	}

	public function slugify($str, $options = []) {

		$str = mb_convert_encoding((string)$str, 'UTF-8', mb_list_encodings());

		$defaults = [
			'delimiter'     => '-',
			'limit'         => null,
			'lowercase'     => true,
			'replacements'  => [],
			'transliterate' => true,
		];

		$options = array_merge($defaults, $options);

		$char_map = [
			// Latin
			'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C',
			'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I',
			'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ő' => 'O',
			'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ű' => 'U', 'Ý' => 'Y', 'Þ' => 'TH',
			'ß' => 'ss',
			'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c',
			'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
			'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ő' => 'o',
			'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ű' => 'u', 'ý' => 'y', 'þ' => 'th',
			'ÿ' => 'y',

			// Latin symbols
			'©' => '(c)',

			// Greek
			'Α' => 'A', 'Β' => 'B', 'Γ' => 'G', 'Δ' => 'D', 'Ε' => 'E', 'Ζ' => 'Z', 'Η' => 'H', 'Θ' => '8',
			'Ι' => 'I', 'Κ' => 'K', 'Λ' => 'L', 'Μ' => 'M', 'Ν' => 'N', 'Ξ' => '3', 'Ο' => 'O', 'Π' => 'P',
			'Ρ' => 'R', 'Σ' => 'S', 'Τ' => 'T', 'Υ' => 'Y', 'Φ' => 'F', 'Χ' => 'X', 'Ψ' => 'PS', 'Ω' => 'W',
			'Ά' => 'A', 'Έ' => 'E', 'Ί' => 'I', 'Ό' => 'O', 'Ύ' => 'Y', 'Ή' => 'H', 'Ώ' => 'W', 'Ϊ' => 'I',
			'Ϋ' => 'Y',
			'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'h', 'θ' => '8',
			'ι' => 'i', 'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => '3', 'ο' => 'o', 'π' => 'p',
			'ρ' => 'r', 'σ' => 's', 'τ' => 't', 'υ' => 'y', 'φ' => 'f', 'χ' => 'x', 'ψ' => 'ps', 'ω' => 'w',
			'ά' => 'a', 'έ' => 'e', 'ί' => 'i', 'ό' => 'o', 'ύ' => 'y', 'ή' => 'h', 'ώ' => 'w', 'ς' => 's',
			'ϊ' => 'i', 'ΰ' => 'y', 'ϋ' => 'y', 'ΐ' => 'i',

			// Turkish
			'Ş' => 'S', 'İ' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'Ğ' => 'G',
			'ş' => 's', 'ı' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'ğ' => 'g',

			// Russian
			'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
			'З' => 'Z', 'И' => 'I', 'Й' => 'J', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
			'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
			'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sh', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'Yu',
			'Я' => 'Ya',
			'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
			'з' => 'z', 'и' => 'i', 'й' => 'j', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
			'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
			'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sh', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu',
			'я' => 'ya',

			// Ukrainian
			'Є' => 'Ye', 'І' => 'I', 'Ї' => 'Yi', 'Ґ' => 'G',
			'є' => 'ye', 'і' => 'i', 'ї' => 'yi', 'ґ' => 'g',

			// Czech
			'Č' => 'C', 'Ď' => 'D', 'Ě' => 'E', 'Ň' => 'N', 'Ř' => 'R', 'Š' => 'S', 'Ť' => 'T', 'Ů' => 'U',
			'Ž' => 'Z',
			'č' => 'c', 'ď' => 'd', 'ě' => 'e', 'ň' => 'n', 'ř' => 'r', 'š' => 's', 'ť' => 't', 'ů' => 'u',
			'ž' => 'z',

			// Polish
			'Ą' => 'A', 'Ć' => 'C', 'Ę' => 'e', 'Ł' => 'L', 'Ń' => 'N', 'Ó' => 'o', 'Ś' => 'S', 'Ź' => 'Z',
			'Ż' => 'Z',
			'ą' => 'a', 'ć' => 'c', 'ę' => 'e', 'ł' => 'l', 'ń' => 'n', 'ó' => 'o', 'ś' => 's', 'ź' => 'z',
			'ż' => 'z',

			// Latvian
			'Ā' => 'A', 'Č' => 'C', 'Ē' => 'E', 'Ģ' => 'G', 'Ī' => 'i', 'Ķ' => 'k', 'Ļ' => 'L', 'Ņ' => 'N',
			'Š' => 'S', 'Ū' => 'u', 'Ž' => 'Z',
			'ā' => 'a', 'č' => 'c', 'ē' => 'e', 'ģ' => 'g', 'ī' => 'i', 'ķ' => 'k', 'ļ' => 'l', 'ņ' => 'n',
			'š' => 's', 'ū' => 'u', 'ž' => 'z'
		];

		$str = preg_replace(array_keys($options['replacements']), $options['replacements'], $str);

		if ($options['transliterate']) {
			$str = str_replace(array_keys($char_map), $char_map, $str);
		}

		$str = preg_replace('/[^\p{L}\p{Nd}]+/u', $options['delimiter'], $str);

		$str = preg_replace('/(' . preg_quote($options['delimiter'], '/') . '){2,}/', '$1', $str);

		$str = mb_substr($str, 0, ($options['limit'] ? $options['limit'] : mb_strlen($str, 'UTF-8')), 'UTF-8');

		$str = trim($str, $options['delimiter']);

		return $options['lowercase'] ? mb_strtolower($str, 'UTF-8') : $str;
	}

	public function generate_pdf($id) {

		$pdf_storage_dir_rel = 'storage/pdf/';
		$pdf_storage_dir = $this->data['root_dir'] . 'public/' . $pdf_storage_dir_rel;

		$pdf_filename = 'Rendelés_' . $id . '.pdf';
		$data['pdf_title'] = 'Rendelés #' . $id;

		$order = Order::find($id)->toArray();
		$order['user'] = User::find($order['user_id'])->toArray();
		$order['data'] = json_decode($order['data'], true);

		$sum_price = 0;
		foreach ($order['data']['order_products'] as $product)
			$sum_price += $product['quantity'] * floatval($product['price']);

		$order['data']['sum_price'] = $sum_price;

		$order['data']['transport_cost'] = $this->data['config']['transport_cost'];
		if ($sum_price >= $this->data['config']['free_transport'])
			$order['data']['transport_cost'] = 0;

		$order['data']['sum_price'] += $order['data']['transport_cost'];

		$data['order'] = $order;

		$data['currency'] = $this->data['currency'];
		$data['eur_price'] = false;
		$data['price_ratio'] = $this->data['config']['price_ratio'];

		if ($order['user']['price_lists_id'] == 5) {

			$data['currency'] = 'EUR';
			$data['eur_price'] = true;

		}

		$overwrite = true;
		if (!is_file($pdf_storage_dir . '/' . $pdf_filename) || $overwrite) {

			return $pdf = PDF::loadView(
				'pdf.order',
				['data' => $data]
			)->save(
				$pdf_storage_dir . '/' . $pdf_filename
			);

		}

	}

	public function get_pdf(Request $request) {

		$request = $request->toArray();

		$pdf = $this->generate_pdf($request['id']);

		$pdf_filename = 'Rendelés_' . $request['id'] . '.pdf';

		return $pdf->stream($pdf_filename);

	}

}