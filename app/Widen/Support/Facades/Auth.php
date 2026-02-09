<?php

namespace MUONLINECORE\App\Widen\Support\Facades;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;

class Auth extends \WPSPCORE\App\Auth\Auth {

	use InstancesTrait;

	public static $instance  = null;

	public static function instance($guard = null) {
		if (!static::$instance) {
			$instance = new static(
				Funcs::instance()->_getMainPath(),
				Funcs::instance()->_getRootNamespace(),
				Funcs::instance()->_getPrefixEnv(),
				[]
			);
			$instance->setAuth();
			static::$instance = $instance;
		}

		if ($guard && $guard !== 'web') {
			static::$instance->getAuth()->shouldUse($guard);
		}

		return static::$instance;
	}

}