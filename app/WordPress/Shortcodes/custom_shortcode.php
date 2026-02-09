<?php

namespace MUONLINECORE\App\WordPress\Shortcodes;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\App\WordPress\NavigationMenus\Menus\Menu1;
use MUONLINECORE\App\WordPress\NavigationMenus\Menus\Menu2;
use WPSPCORE\App\WordPress\Shortcodes\BaseShortcode;

class custom_shortcode extends BaseShortcode {

	use InstancesTrait;

//	public $shortcode = null;

	/*
	 *
	 */

	public function index($atts, $content, $tag) {
		return Menu1::render() . Menu2::render();
//		return Funcs::view('shortcodes.custom_shortcode', compact('content'))->render();
	}


	/*
	 *
	 */

	public function customProperties() {
//		$this->shortcode = 'custom_shortcode';
	}

}