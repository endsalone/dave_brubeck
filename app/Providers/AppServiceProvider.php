<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);

		$this->app->bind(
			'App\Dave\Repositories\ICategoryRepository',
			'App\Dave\Repositories\CategoryRepository'
		);

		$this->app->bind(
			'App\Dave\Repositories\IUserRepository',
			'App\Dave\Repositories\UserRepository'
		);

		$this->app->bind(
			'App\Dave\Repositories\IProjectRepository',
			'App\Dave\Repositories\ProjectRepository'
		);

		$this->app->bind(
			'App\Dave\Repositories\ISectionRepository',
			'App\Dave\Repositories\SectionRepository'
		);

		$this->app->bind(
			'App\Dave\Repositories\IPageRepository',
			'App\Dave\Repositories\PageRepository'
		);
	}

}
