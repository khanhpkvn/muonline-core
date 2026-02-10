<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Widen\Routes\PostTypeColumns\PostTypeColumns as Route;
use MUONLINECORE\App\WordPress\PostTypeColumns\custom_column;
use WPSPCORE\App\Routes\PostTypeColumns\PostTypeColumnsRouteTrait;

class PostTypeColumns {

	use PostTypeColumnsRouteTrait;

	public function post_type_columns() {
//		Route::column('custom_column', [custom_column::class, 'index']);
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}