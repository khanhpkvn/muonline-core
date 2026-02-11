<?php

namespace MUONLINECORE\App\WordPress\ThemeTemplates;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;
use WPSPCORE\App\WordPress\ThemeTemplates\BaseThemeTemplates;

class page_full_width_global_header extends BaseThemeTemplates {

	use InstancesTrait;

//	public $name       = 'page_full_width_global_header';
	public $label      = '[MUONLINECORE] Template: page_full_width_global_header';
//	public $path       = null;
	public $post_types = ['page'];

	/*
	 *
	 */

	public function customProperties() {
//		$this->path = Funcs::instance()->_getResourcesPath('/views/theme-templates/' . $this->name . '.blade.php');
	}

}