<?php

namespace MUONLINECORE\App\WordPress\Shortcodes;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;
use WPSPCORE\App\WordPress\Shortcodes\BaseShortcode;

class muoc_list_posts extends BaseShortcode {

	use InstancesTrait;

//	public $shortcode = null;

	/*
	 *
	 */

	public function index($atts, $content, $tag) {
		$view = Funcs::view('shortcodes.muoc_list_posts');
		return do_shortcode($view);
	}

	/*
	 *
	 */

	public function customProperties() {
//		$this->shortcode = 'custom_shortcode';
	}

}