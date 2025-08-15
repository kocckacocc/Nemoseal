<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Http\Requests\NovaRequest;

class Order extends Resource
{
	/**
	 * The model the resource corresponds to.
	 *
	 * @var string
	 */
	public static $model = \App\Models\Order::class;

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
		return auth()->user()->type == 1 ? 'Rendelések' : 'Rendeléseim';
	}

	public static function indexQuery(NovaRequest $request, $query) {
		return auth()->user()->type == 1 ? $query : $query->where('user_id', $request->user()->id);
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

		$fields = [
			ID::make(__('ID'), 'id')->sortable(),
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

		$fields[] =
			Text::make('Rendelés adatok', 'data', function () {

				$order_data = json_decode($this->data, true);

				$display =
					'<div><span class="pr-2">Név:</span>' . $order_data['last-name'] . ' ' . $order_data['first-name'] . '</div>' .
					'<div><span class="pr-2">Számlázási cím:</span>' . $order_data['payment_zip'] . ' ' . $order_data['payment_city'] . ' ' . $order_data['payment_address'] . '</div>' .
					'<div><span class="pr-2">Szállítási cím:</span>' . $order_data['shipping_zip'] . ' ' . $order_data['shipping_city'] . ' ' . $order_data['shipping_address'] . '</div>';

				return '<div class="text-xs">' . $display . '</div>';
			})
				->asHtml();

		$fields[] =
			Text::make('Művelet', 'xxx', function () {
				return
					'<a target="_blank" href="/get_pdf?id=' . $this->id . '" class="btn btn-default btn-primary">Letöltés</a>';
			})
				->asHtml()
				->OnlyOnIndex();

		$fields[] =
			DateTime::make('Létrehozva', 'created_at');

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
