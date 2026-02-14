<?php

namespace MUONLINECORE\App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use MUONLINECORE\App\Widen\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider {

	/**
	 * The policy mappings for the application.
	 */
	protected $policies = [
//		UsersModel::class => UsersPolicy::class
	];

	/**
	 * Register services.
	 */
	public function register() {
		//
	}

	/**
	 * Bootstrap services.
	 */
	public function boot() {
//		$this->registerPolicies();
		Auth::provider('muserver_user_provider', function ($app, array $config) {
			return new MUServerUserProvider($app['hash'], $config['model']);
		});
	}

}
