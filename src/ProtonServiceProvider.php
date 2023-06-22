<?php

namespace Proton;

use Illuminate\Support\ServiceProvider;

class ProtonServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register()
	{
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// Email views
		// $this->loadViewsFrom(__DIR__ . '/../resources/views', 'proton');

		// Publish
		if ($this->app->runningInConsole()) {
			$this->publishes([
				__DIR__ . '/../app' => base_path('app'),
				__DIR__ . '/../resources/views' => resource_path('views')
			], 'proton-email');
		}
	}
}
