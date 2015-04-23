<?php namespace App\Providers;

use App\Post;
use Illuminate\Support\ServiceProvider;

class ViewsComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->composerNavigation();

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
	public function composerNavigation()
	{
		view()->composer(
			'partials.menu',
			'App\Http\Composers\NavigationComposer'
		);
	}

}
