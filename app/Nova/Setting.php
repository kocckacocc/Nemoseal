<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

use Emilianotisato\NovaTinyMCE\NovaTinyMCE;

class Setting extends Resource
{
	public static function label() {
		return 'Beállítások';
	}

	public static function singularLabel() {
		return 'Beállítás';
	}

	public static function availableForNavigation(Request $request) {
		return auth()->user()->type == 1;
	}

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\Setting::class;

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
			ID::make(__('ID'), 'id')->sortable(),

			Text::make('Beállítás kulcs', 'key')
				->sortable()
				->rules('required'),

			NovaTinyMCE::make('Érték', 'value')
				->options([
					'height'  => '980',
					'plugins' => [
						'lists preview hr anchor pagebreak image wordcount fullscreen directionality paste textpattern link code'
					],
					'toolbar' => 'undo redo | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | image | bullist numlist outdent indent | link'
				])
				->alwaysShow()
				->rules('required'),

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
