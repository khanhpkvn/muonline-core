<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Widen\Routes\PostTypes\PostTypes as Route;
use MUONLINECORE\App\WordPress\PostTypes\wpsp_content;
use WPSPCORE\App\Routes\PostTypes\PostTypesRouteTrait;

class PostTypes {

	use PostTypesRouteTrait;

	public function post_types() {
		Route::post_type('wpsp_content', [wpsp_content::class]);
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}