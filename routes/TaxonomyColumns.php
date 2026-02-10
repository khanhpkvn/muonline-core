<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Widen\Routes\TaxonomyColumns\TaxonomyColumns as Route;
use MUONLINECORE\App\WordPress\TaxonomyColumns\custom_column;
use WPSPCORE\App\Routes\TaxonomyColumns\TaxonomyColumnsRouteTrait;

class TaxonomyColumns {

	use TaxonomyColumnsRouteTrait;

	public function taxonomy_columns() {
//		Route::column('custom_column', [custom_column::class, 'index']);
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}