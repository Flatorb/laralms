<?php

namespace Flatorb\LaraLMS;

use Illuminate\Support\ServiceProvider;

class LaraLMSServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		require __DIR__ . '/routes/web.php';
		
		$this->loadViewsFrom(__DIR__ . '/Views', 'laralms');
	}
	
	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
//		$this->app['laralms'] = $this->app->share(function($app) {
//			return new LaraLMS;
//		});
	}
}