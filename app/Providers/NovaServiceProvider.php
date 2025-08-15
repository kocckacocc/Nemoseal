<?php

namespace App\Providers;

use App\Nova\Admins;
use App\Nova\Approved;
use App\Nova\Category;
use App\Nova\Document;
use App\Nova\Manufacturer;
use App\Nova\Page;
use App\Nova\Products;
use App\Nova\Setting;
use App\Nova\Order;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

use Laravel\Nova\Cards\Help;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

use App\Models\User;
use App\Observers\UserObserver;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		parent::boot();

		User::observe(UserObserver::class);
	}

	/**
	 * Register the Nova routes.
	 *
	 * @return void
	 */
	protected function routes() {
		Nova::routes()
			->withAuthenticationRoutes()
			->withPasswordResetRoutes()
			->register();
	}

	/**
	 * Register the Nova gate.
	 *
	 * This gate determines who can access Nova in non-local environments.
	 *
	 * @return void
	 */
	protected function gate() {
		Gate::define('viewNova', function ($user) {
			return in_array($user->email, [
				//
			]);
		});
	}

	/**
	 * Get the cards that should be displayed on the default Nova dashboard.
	 *
	 * @return array
	 */
	protected function cards() {

		return [

			(new \Ericlagarda\NovaTextCard\TextCard())
				->forceFullWidth()
				->heading('<div class="pt-4 text-2xl">Vezérlőpult</div>')
				->center(false)
				->text(view(
					'pages/dashboard',
					[
						'data' => [
							'user' => Auth::user()->toArray(),
							'settings' => \App\Models\Setting::all()->pluck('value', 'key')->toArray()
						],
					]
				)->render())
				->textAsHtml()
				->headingAsHtml(),

		];
	}

	/**
	 * Get the extra dashboards that should be displayed on the Nova dashboard.
	 *
	 * @return array
	 */
	protected function dashboards() {
		return [];
	}

	/**
	 * Get the tools that should be listed in the Nova sidebar.
	 *
	 * @return array
	 */
	public function tools() {
		return [];
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		Nova::sortResourcesBy(function ($resource) {
			return $resource::$priority ?? 99999;
		});
	}
}
