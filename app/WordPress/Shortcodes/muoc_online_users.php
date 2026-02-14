<?php

namespace MUONLINECORE\App\WordPress\Shortcodes;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use WPSPCORE\App\WordPress\Shortcodes\BaseShortcode;

class muoc_online_users extends BaseShortcode {

	use InstancesTrait;

//	public $shortcode = null;

	/*
	 *
	 */

	public function index($atts, $content, $tag) {
		return do_shortcode($content);
	}

	/*
	 *
	 */

	public function customProperties() {
//		$this->shortcode = 'custom_shortcode';
	}

}