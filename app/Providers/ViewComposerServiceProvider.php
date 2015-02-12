<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->composeNavigation();
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Compose the navigation bar.
	 */
	private function composeNavigation()
	{
		view()->composer('partials.nav', 'App\Http\Composers\NavigationComposer');
//		view()->composer('partials.nav', function($view){
//			$view->with('latest', Article::latest()->first());
//		});
	}

}
