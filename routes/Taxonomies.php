<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Widen\Routes\Taxonomies\Taxonomies as Route;
use MUONLINECORE\App\WordPress\Taxonomies\wpsp_category;
use WPSPCORE\App\Routes\Taxonomies\TaxonomiesRouteTrait;

class Taxonomies {

	use TaxonomiesRouteTrait;

	public function taxonomies() {
//		Route::taxonomy('wpsp_category', [wpsp_category::class]);
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}