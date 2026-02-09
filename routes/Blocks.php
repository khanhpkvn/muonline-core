<?php
namespace MUONLINECORE\routes;

use MUONLINECORE\App\Widen\Routes\Blocks\Blocks as Route;
use WPSPCORE\App\Routes\Blocks\BlocksRouteTrait;
use MUONLINECORE\App\WordPress\Blocks\block_demo;

class Blocks {

	use BlocksRouteTrait;

	/*
	 *
	 */

	public function blocks() {
		Route::block('block-demo', [block_demo::class]);
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}