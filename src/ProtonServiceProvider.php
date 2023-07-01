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
		// Add config
		$this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'proton');
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		// Email views
		$this->loadViewsFrom(__DIR__ . '/../resources/views', 'proton');

		// Publish
		if ($this->app->runningInConsole()) {
			// Copy images
			$this->publishes([
				__DIR__ . '/../public' => public_path('vendor/proton'),
			], 'proton-mail');
			// Edit proton view
			$this->publishes([
				__DIR__ . '/../resources/views' => resource_path('views/vendor/proton')
			], 'proton-views');
		}
	}
}
