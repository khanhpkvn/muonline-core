<?php

namespace MUONLINECORE\App\Widen\Routes\Apis;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;

class Apis extends \WPSPCORE\App\Routes\Apis\Apis {

	use InstancesTrait;

//	public $defaultNamespace = 'wpsp';
	public $defaultVersion   = 'v1';

	/*
	 *
	 */

	public function customProperties() {
		$this->defaultNamespace = Funcs::instance()->_getAppShortName();
	}

}