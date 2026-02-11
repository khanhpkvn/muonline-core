<?php

namespace MUONLINECORE\App\Http\Controllers;

use MUONLINECORE\Funcs;
use WPSPCORE\App\Http\Controllers\BaseController;

class AssetsController extends BaseController {

	public function frontend() {
		wp_enqueue_style(config('app.short_name') . '-frontend-bootstrap-grid', Funcs::asset('/widen/plugins/bootstrap/css/bootstrap-grid.min.css'), 9999, time());
		wp_enqueue_style(config('app.short_name') . '-frontend-bootstrap-utilities', Funcs::asset('/widen/plugins/bootstrap/css/bootstrap-utilities.min.css'), 9999, time());
//		wp_enqueue_script(config('app.short_name') . '-frontend', Funcs::asset('/js/web/main.min.js'), 9999, time(), true);
	}

	public function backend() {
		wp_enqueue_script('dashboard');
	}

}