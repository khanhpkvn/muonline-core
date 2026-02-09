<?php

namespace MUONLINECORE\App\Widen\Routes;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;

class RouteMap extends \WPSPCORE\App\Routes\RouteMap {

	use InstancesTrait;

	public static $instance = null;

	/**
	 * @return static
	 */
	public static function instance() {
		if (!static::$instance) {
			static::$instance = new static(
				Funcs::instance()->_getMainPath(),
				Funcs::instance()->_getRootNamespace(),
				Funcs::instance()->_getPrefixEnv(),
				[]
			);
		}
		return static::$instance;
	}

}