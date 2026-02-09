<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Widen\Routes\WPRoles\WPRoles as Route;
use MUONLINECORE\App\WordPress\WPRoles\super_admin;
use WPSPCORE\App\Routes\WPRoles\WPRolesRouteTrait;

class WPRoles {

	use WPRolesRouteTrait;

	public function wp_roles() {
		Route::wp_role('super_admin', [super_admin::class]);
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}