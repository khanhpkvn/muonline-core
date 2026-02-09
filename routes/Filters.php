<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Http\Controllers\PagesController;
use MUONLINECORE\App\Widen\Routes\Filters\Filters as Route;
use WPSPCORE\App\Routes\Filters\FiltersRouteTrait;

class Filters {

	use FiltersRouteTrait;

	/*
	 *
	 */

	public function filters() {
//		Route::filter('the_content', [PagesController::class, 'content']);
	}

}