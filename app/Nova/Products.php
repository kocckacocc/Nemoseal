<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class Products extends Resource
{
	use HasSortableRows;

	public static $priority = 5;

	public static $perPageViaRelationship = 20;

	public static $defaultSort = 'sort_order';

	public static function label() {
		return auth()->user()->type == 1 ? 'Termékek' : 'Termékeim';
	}

	public static function perPageOptions() {
		return [100, 250, 500];
	}

	public static function singularLabel() {
		return 'Termék';
	}

	public static function availableForNavigation(Request $request) {

		if (auth()->user()->type == 0)
			return 0;

		return 1;

	}

	public static function indexQuery(NovaRequest $request, $query) {

		$_q = $query;

		if (static::$defaultSort && empty($request->get('orderBy'))) {
			$query->getQuery()->orders = [];
			$_q = $query->orderBy(static::$defaultSort);
		}

		if (auth()->user()->type == 0)
			$_q = $_q->where('price_lists_id', $request->user()->price_lists->id ?? 0);

		return $_q;

	}

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\Products::class;

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'id';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'id',
		'name',
		'model',
		'price',
	];

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request) {

		$fields = [
			ID::make(__('ID'), 'id')->sortable(),

			Number::make('Sorrend', 'sort_order')->sortable(),

			Text::make('Termék név', 'name')
				->sortable()
				->rules('required', 'max:255'),

			Text::make('Cikkszám', 'model')
				->sortable()
				->rules('required', 'max:255'),

			Textarea::make('Leírás', 'description')
				->sortable()
				->showOnIndex(true),

			Image::make('Termék kép', 'image')
				->disk('public')
				->storeOriginalName('image')
				->preview(function ($value, $disk) {
					if (empty($value))
						return $value;
					$value = dirname(config('app.APP_URL')) . '/storage/' . $value;
					return $value;
				})
				->storeAs(function (Request $request) {
					return $request->image->getClientOriginalName();
				})

		];

		if ((auth()->user()->type == 1)) {

			$fields = array_merge($fields, [

				Text::make('Lista ár', 'price_1')
					->sortable()
					->rules('required', 'max:255'),

				Text::make('30% ár', 'price_2')
					->sortable()
					->rules('required', 'max:255'),

				Text::make('37% ár', 'price_3')
					->sortable()
					->rules('required', 'max:255'),

				Text::make('V.I.P. ár', 'price_4')
					->sortable()
					->rules('required', 'max:255'),

				Text::make('Szlovák ár', 'price_5')
					->sortable()
					->rules('required', 'max:255'),

				Text::make('37% -3%', 'price_6')
					->sortable()
					->rules('max:255'),

				Text::make('EUR ár - Mo.', 'price_7')
					->sortable()
					->rules('max:255'),

				Text::make('V.I.P. -2%', 'price_8')
					->sortable()
					->rules('max:255'),

				Text::make('5% ár', 'price_9')
					->sortable()
					->rules('max:255'),

				BelongsTo::make(
					'Kategória',
					'category',
					'App\Nova\Category'
				)
					->sortable(),

				BelongsTo::make(
					'Gyártó',
					'manufacturer',
					'App\Nova\Manufacturer'
				)
					->sortable(),

				Text::make('Termékcsalád', 'family')
					->sortable(),

				/*
				BelongsTo::make(
					'Árlista',
					'price_lists',
					'App\Nova\Pricelists'
				)
					->sortable(),
				*/

			]);

		} else {

			$fields = array_merge($fields, [
				Text::make('Eladási ár', 'price_' . auth()->user()->price_lists_id)
					->sortable()
					->rules('required', 'max:255')
			]);

		}

		$fields = array_merge($fields, [

			Text::make('Méret (mm)', 'attribute_1')
				->sortable(),

			Text::make('Hossz (mm)', 'attribute_2')
				->sortable(),

			Text::make('Cső átmérő (mm)', 'attribute_3')
				->sortable(),

			Text::make('Magfurat (mm)', 'attribute_4')
				->sortable(),

			Text::make('Kiszerelés (db)', 'attribute_5')
				->sortable(),

			Text::make('Kiszerelés (ml)', 'attribute_6')
				->sortable(),

			Text::make('Szín', 'attribute_7')
				->sortable(),

			Text::make('Sérülés méret (mm)', 'attribute_8')
				->sortable(),

			Text::make('BAR', 'attribute_9')
				->sortable(),

			Text::make('A méret (mm)', 'attribute_10')
				->sortable(),

			Text::make('B méret (mm)', 'attribute_11')
				->sortable(),

			Text::make('Vastagság (mm)', 'attribute_12')
				->sortable(),

			Text::make('Szélesség (mm)', 'attribute_13')
				->sortable(),

			Text::make('Hossz (m)', 'attribute_14')
				->sortable(),

			Text::make('B csatl. (”)', 'attribute_15')
				->sortable(),

			Text::make('Szalagszélesség (mm)', 'attribute_16')
				->sortable(),

			Text::make('Csomagolási egység', 'attribute_17')
				->sortable(),

			Text::make('Mérettartomány (mm)', 'attribute_18')
				->sortable(),

			Text::make('A átmérő (mm)', 'attribute_19')
				->sortable(),

			Text::make('B átmérő (mm)', 'attribute_20')
				->sortable(),

		]);

		return $fields;

	}

	public static function authorizedToCreate(Request $request) {
		return (auth()->user()->type == 1);
	}

	public function authorizedToUpdate(Request $request): bool {
		return (auth()->user()->type == 1);
	}

	public function authorizedToDelete(Request $request): bool {
		return (auth()->user()->type == 1);
	}

	/**
	 * Get the cards available for the request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function cards(Request $request) {
		return [];
	}

	/**
	 * Get the filters available for the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function filters(Request $request) {
		return [];
	}

	/**
	 * Get the lenses available for the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function lenses(Request $request) {
		return [];
	}

	/**
	 * Get the actions available for the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function actions(Request $request) {

		return [
			(new Actions\ImportProducts),

			(new Actions\ExportProducts)
				->withWriterType(\Maatwebsite\Excel\Excel::XLS)
				->withHeadings(),
		];

		return [];
	}
}
