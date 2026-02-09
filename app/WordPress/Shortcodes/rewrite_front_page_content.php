<?php

namespace MUONLINECORE\App\WordPress\Shortcodes;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;
use WPSPCORE\App\WordPress\Shortcodes\BaseShortcode;

class rewrite_front_page_content extends BaseShortcode {

	use InstancesTrait;

//	public $shortcode = null;

	/*
	 *
	 */

	public function index($atts, $content, $tag) {
//		global $wp_query;
//		echo '<pre>'; print_r($wp_query->query_vars); echo '</pre>';
		$rewriteIdent = get_query_var(Funcs::config('app.short_name') . '_rewrite_ident');
		if ($rewriteIdent) {
			$page = str_replace('_', '-', $rewriteIdent);
			return Funcs::view('rewrite-front-pages.' . $page, ['request' => $this->request]);
		}
		return 'Rewrite front page content...';
	}


	/*
	 *
	 */

	public function customProperties() {
//		$this->shortcode = 'custom_shortcode';
	}

}