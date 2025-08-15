<?php

namespace App\Nova;

use Illuminate\Http\Request;

use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

use Timothyasp\Color\Color;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

class Category extends Resource
{
	use HasSortableRows;

	public static $priority = 4;

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\Category::class;

	/**
	 * The single value that should be used to represent the resource when being displayed.
	 *
	 * @var string
	 */
	public static $title = 'name';

	/**
	 * The columns that should be searched.
	 *
	 * @var array
	 */
	public static $search = [
		'id', 'name', 'description'
	];

	public static function label() {
		return 'Kategóriák';
	}

	public static function singularLabel() {
		return 'Kategória';
	}

	public static function availableForNavigation(Request $request) {
		return auth()->user()->type == 1;
	}

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request) {
		return [
			ID::make(__('ID'), 'id')->sortable(),

			Text::make('Kategória név', 'name')
				->sortable()
				->rules('required'),

			Text::make('Termékcsalád', 'family')
				->sortable(),

			Image::make('Kép', 'image')
				->disk('public')
				->storeOriginalName('image')
				->preview(function ($value, $disk) {
					return empty($value) ? '' : dirname(config('app.APP_URL')) . '/storage/' . $value;
				})
				->storeAs(function (Request $request) {
					return $request->image->getClientOriginalName();
				}),

			Number::make('Sorrend', 'sort_order')->sortable(),

			Trix::make('Leírás', 'description'),

			HasMany::make(
				'Termékek',
				'products',
				'App\Nova\Products'
			),

		];
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
		return [];
	}
}
