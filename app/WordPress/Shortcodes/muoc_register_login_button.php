<?php

namespace MUONLINECORE\App\WordPress\Shortcodes;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;
use WPSPCORE\App\WordPress\Shortcodes\BaseShortcode;

class muoc_register_login_button extends BaseShortcode {

	use InstancesTrait;

//	public $shortcode = null;

	/*
	 *
	 */

	public function index($atts, $content, $tag) {
		return Funcs::view('shortcodes.muoc_register_login_button')->render();
	}

	/*
	 *
	 */

	public function customProperties() {
//		$this->shortcode = 'custom_shortcode';
	}

}