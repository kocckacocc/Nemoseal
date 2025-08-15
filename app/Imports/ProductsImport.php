<?php

namespace App\Imports;

use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Products;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
	/**
	 * @param array $row
	 *
	 * @return \Illuminate\Database\Eloquent\Model|null
	 */
	public function model(array $row) {

		$exists = Products::where(['model' => $row['cikkszam']])->first();

		if (is_null($exists))
			$exists_array = false;
		else
			$exists_array = $exists->toArray();

		$column_map = [
			'sorrend'    => 'sort_order',
			'termek_nev' => 'name',
			'leiras'     => 'description',
			'termek_kep' => 'image',

			'lista_ar'   => 'price_1',
			'30_ar'      => 'price_2',
			'37_ar'      => 'price_3',
			'vip_ar'     => 'price_4',
			'szlovak_ar' => 'price_5',
			'37_3'		 => 'price_6',
			'eur_ar_mo'  => 'price_7',
			'vip_2' 	 => 'price_8',
			'5_ar'		 => 'price_9',

			'termekcsalad' => 'family',

			'meret_mm'           => 'attribute_1',
			'hossz_mm'           => 'attribute_2',
			'cso_atmero_mm'      => 'attribute_3',
			'magfurat_mm'        => 'attribute_4',
			'kiszereles_db'      => 'attribute_5',
			'kiszereles_ml'      => 'attribute_6',
			'szin'               => 'attribute_7',
			'serules_meret_mm'   => 'attribute_8',
			'bar'                => 'attribute_9',
			'a_meret_mm'         => 'attribute_10',
			'b_meret_mm'         => 'attribute_11',
			'vastagsag_mm'       => 'attribute_12',
			'szelesseg_mm'       => 'attribute_13',
			'hossz_m'            => 'attribute_14',
			'b_csatl'            => 'attribute_15',
			'szalagszelesseg_mm' => 'attribute_16',
			'csomagolasi_egyseg' => 'attribute_17',
			'merettartomany_mm'  => 'attribute_18',
			'a_atmero_mm'        => 'attribute_19',
			'b_atmero_mm'        => 'attribute_20',
		];

		if (isset($exists_array['id'])) {

			$changed = false;
			foreach ($column_map as $cm_k => $cm_v) {

				if (!empty($row[$cm_k] ?? '')) {

					$exists->{$cm_v} = $row[$cm_k];
					$changed = true;

				}

			}

			if ($changed) {

				$exists->save();

			}

		} else {

			$new_product = new Products();

			foreach ($column_map as $cm_k => $cm_v) {
				if (!empty($row[$cm_k] ?? '')) {
					$new_product->{$cm_v} = $row[$cm_k];
				}
			}

			$new_product->model = $row['cikkszam'] ?? '';

			$category_name = $row['kategoria'] ?? false;
			if ($category_name)
				$new_product->category_id = Category::where('name', $category_name)->first()->id ?? '';

			$manufacturer_name = $row['gyarto'] ?? false;
			if ($manufacturer_name)
				$new_product->manufacturer_id = Manufacturer::where('name', $manufacturer_name)->first()->id ?? '';

			$new_product->save();

		}

		if (isset($old_import)) {

			set_time_limit(0);

			$column_map = [
				'Termék név',
				'Cikkszám',
				'Eladási ár - árlista 1',
				'Eladási ár - árlista 2',
				'Eladási ár - árlista 3',
				'Eladási ár - árlista 4',
				'Termék kép',
				'Méret (mm)',
				'Hossz (mm)',
				'Cső átmérő (mm)',
				'Magfurat (mm)',
				'Kiszerelés (db)',
				'Kiszerelés (ml)',
				'Sorrend',
				'Termékcsalád',
				'Szín',
				'Sérülés méret (mm)',
				'BAR',
				'A méret (mm)',
				'B méret (mm)',
				'Vastagság (mm)',
				'Szélesség (mm)',
				'Hossz (m)',
				'B csatl. (”)',
				'Szalagszélesség (mm)',
				'Csomagolási egység',
				'Mérettartomány (mm)',
				'A átmérő (mm)',
				'B átmérő (mm)',
				'Kategória',
				'Gyártó'
			];

			$item['attributes'] = [];

			foreach (explode(',', $row[9]) as $name) {

				$name = str_replace('"', '', trim($name));
				if (empty($name)) continue;

				$name_ex = explode('[', $name);

				if (!isset($name_ex[1])) continue;

				$att_name_raw = trim($name_ex[1]);

				foreach (['attribute_1'  => 'Méret',
									'attribute_2'  => 'Hossz',
									'attribute_3'  => 'Cső átmérő',
									'attribute_4'  => 'Magfurat',
									'attribute_5'  => 'Kiszerelés (db)',
									'attribute_6'  => 'Kiszerelés (ml)',
									'attribute_7'  => 'Szín',
									'attribute_8'  => 'Sérülés méret',
									'attribute_9'  => 'BAR',
									'attribute_10' => 'A méret (mm)',
									'attribute_11' => 'B méret (mm)',
									'attribute_12' => 'Vastagság (mm)',
									'attribute_13' => 'Szélesség (mm)',
									'attribute_14' => 'Hossz (m)',
									'attribute_15' => 'B csatl.',
									'attribute_16' => 'Szalag szélesség',
									'attribute_17' => 'Csomagolási egység',
									'attribute_18' => 'Méret tartomány',
									'attribute_19' => 'A átmérő (mm)',
									'attribute_20' => 'B átmérő (mm)',
								 ] as $maybe_att_k => $maybe_att_v) {

					if (strpos($att_name_raw, $maybe_att_v) !== false) {

						$item['attributes'][$maybe_att_k] = trim($name_ex[0]);

					}

				}

			}

			$request = request()->toArray();

			if ($row[0] == 'Terméknév' || empty($row[0] ?? ''))
				return;

			$product_image = '';

			$remote_image = $this->get_string_between($row[1], '(https://', ')');
			if (!empty($remote_image)) {
				$image_filename = basename($remote_image);
				$real_root_dir = str_replace(['\app\Imports', '/app/Imports',], '', dirname(__FILE__));
				$image_path = $real_root_dir . '/public/storage/' . $image_filename;
				if (!file_exists($image_path) || isset($overwrite)) {
					$remote_image = 'https://' . $remote_image;
					file_put_contents($image_path, $this->file_get_contents_curl($remote_image));
				}
				$product_image = $image_filename;
			}

			$product = [
				'name'       => $row[0],
				'model'      => $row[3],
				'family'     => $row[5] ?? '',
				'sort_order' => $row[13],
			];

			$product = array_merge(
				$product,
				$item['attributes']
			);

			if (!empty($product_image))
				$product['image'] = $product_image;

			$category_name = $row[7];
			$category_id = Category::where('name', $category_name)->first()->id ?? '';

			if (empty($category_id) && !empty($category_name)) {
				$category = new Category;
				$category->name = $category_name;
				$category->save();
				$category_id = $category->id;
			}

			$product['category_id'] = $category_id;

			$manufacturer_name = $row[4];
			$manufacturer_id = Manufacturer::where('name', $manufacturer_name)->first()->id ?? '';

			if (empty($manufacturer_id) && !empty($manufacturer_name)) {
				$manufacturer = new Manufacturer;
				$manufacturer->name = $manufacturer_name;
				$manufacturer->save();
				$manufacturer_id = $manufacturer->id;
			}

			$product['manufacturer_id'] = $manufacturer_id;

			$product['price_lists_id'] = 0;

			foreach (array_slice($row, 10, 4) as $pl_k => $pl_v) {
				$product['price_' . ($pl_k + 1)] = $pl_v;
			}

			$_product = new Products;
			foreach ($product as $p_k => $p_v) {
				$_product->{$p_k} = $p_v;
			}

			$_product->save();

		}

		return null;

	}

	public function get_string_between($string, $start, $end) {
		$string = ' ' . $string;
		$ini = strpos($string, $start);
		if ($ini == 0) return '';
		$ini += strlen($start);
		$len = strpos($string, $end, $ini) - $ini;
		return substr($string, $ini, $len);
	}

	public function file_get_contents_curl($url) {
		$file = file_get_contents($url);
		return $file;
	}

}
