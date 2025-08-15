<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class Approved extends Resource
{
	public static $priority = 2;

	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\User::class;

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
		'id', 'name', 'email',
	];

	public static function label() {
		return 'Jóváhagyott felhasználók';
	}

	public static function singularLabel() {
		return 'Profil';
	}

	public static function availableForNavigation(Request $request) {
		return auth()->user()->type == 1;
	}

	public static function indexQuery(NovaRequest $request, $query) {

		return
			$query->where([
				'type'  => 0,
				'state' => 1
			]);

	}

	/**
	 * Get the fields displayed by the resource.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return array
	 */
	public function fields(Request $request) {

		$fields = [

			ID::make()->sortable(),

			Image::make('Profilkép', 'image')
				->disk('public')
				->storeOriginalName('image')
				->preview(function ($value, $disk) {
					return empty($value) ? '' : dirname(config('app.APP_URL')) . '/storage/' . $value;
				})
				->storeAs(function (Request $request) {
					return $request->image->getClientOriginalName();
				}),

			Text::make('Felhasználónév', 'name')
				->sortable()
				->rules('required', 'max:255'),

			Text::make('Vezetéknév', 'lastname')
				->sortable()
				->hideFromIndex(),

			Text::make('Keresztnév', 'firstname')
				->sortable()
				->hideFromIndex(),

			Text::make('Email')
				->sortable()
				->rules('required', 'email', 'max:254')
				->creationRules('unique:users,email')
				->updateRules('unique:users,email,{{resourceId}}'),

			Text::make('Telefonszám', 'phone')
				->sortable()
				->rules('required', 'max:255')
				->hideFromIndex(),

			Password::make('Jelszó', 'Password')
				->onlyOnForms()
				->creationRules('required', 'string', 'min:8')
				->updateRules('nullable', 'string', 'min:8')
				->hideFromIndex(),

			BelongsTo::make('Árlista', 'price_lists', 'App\Nova\PriceLists'),

			Text::make('Cégnév', 'company')
				->sortable()
				->rules('required')
				->hideFromIndex(),

			Text::make('Adószám', 'taxno')
				->sortable()
				->rules('required', 'max:255')
				->hideFromIndex(),

			Text::make('Kapcsolattartó vezetéknév', 'lastname')
				->sortable()
				->rules('required', 'max:255')
				->hideFromIndex(),

			Text::make('Kapcsolattartó keresztnév', 'firstname')
				->sortable()
				->rules('required', 'max:255')
				->hideFromIndex(),

			HasMany::make('Címek', 'addresses', 'App\Nova\Address')

		];

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
