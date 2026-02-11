<?php

namespace MUONLINECORE\routes;

use MUONLINECORE\App\Widen\Routes\Shortcodes\Shortcodes as Route;
use MUONLINECORE\App\WordPress\Shortcodes\custom_shortcode;
use MUONLINECORE\App\WordPress\Shortcodes\rewrite_front_page_content;
use MUONLINECORE\App\WordPress\Shortcodes\wpsp_content;
use WPSPCORE\App\Routes\Shortcodes\ShortcodesRouteTrait;
use MUONLINECORE\App\WordPress\Shortcodes\muoc_top_players;
use MUONLINECORE\App\WordPress\Shortcodes\muoc_top_guilds;
use MUONLINECORE\App\WordPress\Shortcodes\muoc_list_posts;
use MUONLINECORE\App\WordPress\Shortcodes\muoc_register_form;

class Shortcodes {

	use ShortcodesRouteTrait;

	public function shortcodes() {
        Route::shortcode('muoc_register_form', [muoc_register_form::class, 'index']);
        Route::shortcode('muoc_list_posts', [muoc_list_posts::class, 'index']);
        Route::shortcode('muoc_top_guilds', [muoc_top_guilds::class, 'index']);
        Route::shortcode('muoc_top_players', [muoc_top_players::class, 'index']);
//		Route::shortcode('wpsp_content', [wpsp_content::class, 'index']);
//		Route::shortcode('rewrite_front_page_content', [rewrite_front_page_content::class, 'index']);
//		Route::shortcode('custom_shortcode', [custom_shortcode::class, 'index']);
	}

	/*
	 *
	 */

	public function actions() {}

	public function filters() {}

}