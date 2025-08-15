<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Http\Requests\NovaRequest;

class Document extends Resource
{
	public static function label() {
		return 'Dokumentumok';
	}

	public static function singularLabel() {
		return 'Dokumentum';
	}

	public static function availableForNavigation(Request $request) {
		return auth()->user()->type == 1;
	}

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\Document::class;

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

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request) {
		return [

			ID::make()->sortable(),

			Text::make('Megnevezés', 'name')
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

			File::make('Fájl', 'file')
				->disk('public')
				->storeOriginalName('file')
				->storeAs(function (Request $request) {
					return $request->file->getClientOriginalName();
				}),

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
