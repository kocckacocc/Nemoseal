<?php

namespace App\Nova;

use Illuminate\Http\Request;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Hidden;

use Laravel\Nova\Http\Requests\NovaRequest;

class Address extends Resource
{
	public static $priority = 6;

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\Address::class;

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
	];

	public static function label() {
		return (auth()->user()->type == 1) ? 'Címek' : 'Címeim';
	}

	public static function singularLabel() {
		return 'Cím';
	}

	public static function indexQuery(NovaRequest $request, $query) {
		return auth()->user()->type == 1 ? $query : $query->where('user_id', $request->user()->id);
	}

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request) {

		$fields = [
			ID::make(__('ID'), 'id')->sortable(),

			Text::make('Irányítószám', 'zip')
				->sortable(),

			Text::make('Város', 'city')
				->sortable(),

			Text::make('Utca, házszám', 'address')
				->sortable(),

			Text::make('Üzlet jellege', 'business_type')
				->sortable(),

			Text::make('Nyitvatartás', 'open_times')
				->sortable()
				->hideFromIndex(),

		];

		if (auth()->user()->type == 1) {
			$fields[] =
				BelongsTo::make('Partner', 'user', 'App\Nova\User')
					->searchable();
		} else {
			$fields[] =
				Hidden::make('user_id')->default(function ($request) {
					return $request->user()->id;
				});
		}

		return $fields;
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
