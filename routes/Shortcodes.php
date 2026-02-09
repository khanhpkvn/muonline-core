<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Widen\Routes\Shortcodes\Shortcodes as Route;
use MUONLINECORE\App\WordPress\Shortcodes\custom_shortcode;
use MUONLINECORE\App\WordPress\Shortcodes\rewrite_front_page_content;
use MUONLINECORE\App\WordPress\Shortcodes\wpsp_content;
use WPSPCORE\App\Routes\Shortcodes\ShortcodesRouteTrait;

class Shortcodes {

	use ShortcodesRouteTrait;

	public function shortcodes() {
		Route::shortcode('wpsp_content', [wpsp_content::class, 'index']);
		Route::shortcode('rewrite_front_page_content', [rewrite_front_page_content::class, 'index']);
		Route::shortcode('custom_shortcode', [custom_shortcode::class, 'index']);
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}