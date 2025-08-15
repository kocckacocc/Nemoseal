<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

use Emilianotisato\NovaTinyMCE\NovaTinyMCE;

class Page extends Resource
{
	public static function label() {
		return 'Oldalak';
	}

	public static function singularLabel() {
		return 'Oldal';
	}

	public static function availableForNavigation(Request $request) {
		return auth()->user()->type == 1;
	}

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\Page::class;

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

			ID::make(__('ID'), 'id')
				->sortable(),

			Select::make('Nyelv', 'lang')
				->options([
					'hun' => 'Magyar',
					'eng' => 'Angol',
				])
				->sortable()
				->displayUsingLabels(),

			Text::make('Slug', 'slug')
				->sortable()
				->rules('required', 'max:255'),

			Text::make('Cím', 'title')
				->sortable()
				->rules('required'),

			Text::make('Menü elem', 'menu_item')
				->sortable()
				->rules('required'),

			NovaTinyMCE::make('Tartalom', 'content')
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
