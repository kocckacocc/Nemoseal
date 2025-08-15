<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

use Timothyasp\Color\Color;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;

class Manufacturer extends Resource
{
	use HasSortableRows;

	public static $priority = 3;

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\Manufacturer::class;

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
		'id',
	];

	public static function label() {
		return 'Gyártók';
	}

	public static function singularLabel() {
		return 'Gyártó';
	}

	public static function availableForNavigation(Request $request) {
		return auth()->user()->type == 1;
	}

	public static $defaultSort = ['sort_order' => 'asc'];

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request) {
		return [

			ID::make(__('ID'), 'id')->sortable(),

			Text::make('Gyártó név', 'name')
				->sortable()
				->rules('required'),

			Image::make('Kép', 'image')
				->sortable(),

			Number::make('Sorrend', 'sort_order')->sortable(),

			Trix::make('Leírás', 'description'),

			HasMany::make('Termékek', 'products', 'App\Nova\Products'),

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
