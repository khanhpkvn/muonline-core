<?php

namespace MUONLINECORE\App\WordPress\Shortcodes;

use MUONLINECORE\app\Models\MUServerGuild;
use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;
use WPSPCORE\App\WordPress\Shortcodes\BaseShortcode;

class muoc_top_guilds extends BaseShortcode {

	use InstancesTrait;

//	public $shortcode = null;

	/*
	 *
	 */

	public function index($atts, $content, $tag) {
		$guilds = MUServerGuild::query()
			->orderByDesc('G_Score')
			->take(12)
			->get();

		$view = Funcs::view('shortcodes.muoc_top_guilds', compact('guilds'));

		return do_shortcode($view);
	}

	/*
	 *
	 */

	public function customProperties() {
//		$this->shortcode = 'custom_shortcode';
	}

}