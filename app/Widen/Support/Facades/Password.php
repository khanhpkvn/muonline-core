<?php

namespace MUONLINECORE\App\Widen\Support\Facades;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;

class Password extends \WPSPCORE\App\Auth\Password {

	use InstancesTrait;

	public static $instance  = null;

	public static function instance() {
		if (!static::$instance) {
			$instance = new static(
				Funcs::instance()->_getMainPath(),
				Funcs::instance()->_getRootNamespace(),
				Funcs::instance()->_getPrefixEnv(),
				[]
			);
			$instance->setPassword();
			static::$instance = $instance;
		}
		return static::$instance;
	}

}