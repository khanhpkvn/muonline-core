<?php

namespace MUONLINECORE\App\Providers;

use Illuminate\Support\ServiceProvider;
use MUONLINECORE\App\Models\UsersModel;
use MUONLINECORE\App\Observers\UsersObserver;

class EventServiceProvider extends ServiceProvider {

	/**
	 * Register any application services.
	 */
	public function register() {
		//
	}

	/**
	 * Bootstrap any application services.
	 */
	public function boot() {
		UsersModel::observe(UsersObserver::class);
	}

}