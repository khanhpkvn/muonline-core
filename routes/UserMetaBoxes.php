<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Widen\Routes\UserMetaBoxes\UserMetaBoxes as Route;
use MUONLINECORE\App\WordPress\UserMetaBoxes\custom_user_meta_box;
use WPSPCORE\App\Routes\UserMetaBoxes\UserMetaBoxesRouteTrait;

class UserMetaBoxes {

	use UserMetaBoxesRouteTrait;

	/*
	 *
	 */

	public function user_meta_boxes() {
//		Route::user_meta_box('custom_user_meta_box', [custom_user_meta_box::class, 'index']);
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}