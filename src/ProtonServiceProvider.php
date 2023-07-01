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

		// Locales
		$this->loadTranslationsFrom(__DIR__ . '/../lang', 'proton');
		$this->loadJsonTranslationsFrom(__DIR__ . '/../lang');

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
			// Locales
			$this->publishes([
				__DIR__ . '/../lang' => base_path('lang/vendor/proton'),
			], 'webi-lang');
			// Config
			$this->publishes([
				__DIR__ . '/../config/config.php' => config_path('proton.php'),
			], 'proton-config');
		}
	}
}
