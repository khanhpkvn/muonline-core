<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Http\Controllers\AuthController;
use MUONLINECORE\App\Widen\Routes\FrontPages\FrontPages as Route;
use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\App\Http\Middleware\AuthenticationMiddleware;
use MUONLINECORE\App\Http\Middleware\EnsureEmailIsVerified;
use MUONLINECORE\App\WordPress\FrontPages\front_page_demo;
use MUONLINECORE\App\WordPress\FrontPages\front_page_demo_view;
use MUONLINECORE\App\WordPress\FrontPages\register;
use WPSPCORE\App\Routes\FrontPages\FrontPagesRouteTrait;
use MUONLINECORE\App\WordPress\FrontPages\login;

class FrontPages {

	use InstancesTrait, FrontPagesRouteTrait;

	/*
	 *
	 */

	public function front_pages() {
		Route::post('login\/?$', [login::class, 'login']);
		Route::post('register', [register::class, 'register']);

//		Route::name('auth.')->prefix('auth')->group(function() {
//			Route::get('login', [front_page_demo::class, 'login'])->name('login');
//			Route::get('register', [front_page_demo::class, 'register'])->name('register');
//			Route::get('forgot-password', [front_page_demo::class, 'forgotPassword'])->name('forgot_password');
//			Route::get('reset-password/{token}', [front_page_demo::class, 'resetPassword'])->name('reset_password');
//		});
//		Route::name('verification.')->group(function() {
//			Route::get('/email/resend', [front_page_demo::class, 'resend'])->name('resend');
//			Route::get('/email/notice', [front_page_demo::class, 'notice'])->name('notice');
//			Route::get('/email/verify/{id}/{hash}', [front_page_demo::class, 'verify'])->middleware(AuthenticationMiddleware::class)->name('verify');
//		});
//		Route::name('front_page.')->group(function() {
//			Route::get('front-page-demo', [front_page_demo::class, 'index'])->name('front_page_demo');
//			Route::get('front-page-demo-view', [front_page_demo_view::class, 'index'])->name('front_page_demo_view');
//			Route::get('front-page-demo\/(?P<endpoint>[^\/]+)$', [front_page_demo::class, 'index'])->middleware(AuthenticationMiddleware::class, EnsureEmailIsVerified::class)->name('index');
//			Route::post('front-page-demo\/(?P<endpoint>[^\/]+)$', [front_page_demo::class, 'update'])->name('update');
//			Route::post('front-page\/(?P<endpoint>[^\/]+)$', [front_page_demo::class, 'update']);
//			Route::get('front-page-2\/?$', [front_page_demo_2::class, 'index']);
//		});
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}