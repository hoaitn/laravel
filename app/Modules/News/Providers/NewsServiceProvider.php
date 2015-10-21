<?php
namespace App\Modules\News\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class NewsServiceProvider extends ServiceProvider
{
	/**
	 * Register the News module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\News\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the News module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('news', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('news', realpath(__DIR__.'/../Resources/Views'));
	}
}
