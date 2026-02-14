<?php

namespace MUONLINECORE\App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use MUONLINECORE\App\Models\UsersModel;
use MUONLINECORE\App\Policies\UsersPolicy;
use MUONLINECORE\Funcs;

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
		Funcs::app('auth')->provider('muserver_user_provider', function ($app, array $config) {
			return new MUServerUserProvider($app['hash'], $config['model']);
		});
	}

}
