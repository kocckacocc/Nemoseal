<?php

namespace App\Nova;

use Illuminate\Http\Request;

use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

use Timothyasp\Color\Color;

class PriceLists extends Resource
{
	public static function label() {
		return auth()->user()->type == 1 ? 'Árlisták' : 'Árlistáim';
	}

	public static function singularLabel() {
		return 'Árlista';
	}

	public static function availableForNavigation(Request $request) {
		return 0;
		return auth()->user()->type == 1;
	}

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\PriceLists::class;

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
		'name',
	];

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request) {
		return [

			ID::make(__('ID'), 'id')->sortable(),

			Text::make('Árlista név', 'name')
				->sortable()
				->rules('required', 'max:255'),

			HasMany::make(
				'Termékek',
				'products',
				'App\Nova\Products'
			),

			HasMany::make(
				'Partnerek',
				'users',
				'App\Nova\User'
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
