<?php

namespace MUONLINECORE\App\WordPress\FrontPages;

use Illuminate\Http\Request;
use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;
use WPSPCORE\App\WordPress\FrontPages\BaseFrontPage;

class front_page_demo extends BaseFrontPage {

	use InstancesTrait;
	/*
	 *
	 */

	public function customProperties() {
//		$this->path = 'front-page\/([^\/]+)\/?$';
	}

	/*
	 *
	 */

	public function index(Request $request, $endpoint = null) {
		global $post;
		echo '<pre style="background:white;z-index:9999;position:relative">'; print_r($post); echo '</pre>';
		die();
//		echo $endpoint;
	}

	public function update(Request $request) {
		print_r($request->all());
		die();
	}

}