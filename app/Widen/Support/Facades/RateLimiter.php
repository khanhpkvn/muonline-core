<?php

namespace MUONLINECORE\App\Widen\Support\Facades;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;

/**
 * @mixin \Illuminate\Support\Facades\RateLimiter
 */
class RateLimiter extends \WPSPCORE\App\RateLimiter\RateLimiter {

	use InstancesTrait;

	public static $instance  = null;

	public static function instance() {
		if (!static::$instance) {
			$instance = (new static(
				Funcs::instance()->_getMainPath(),
				Funcs::instance()->_getRootNamespace(),
				Funcs::instance()->_getPrefixEnv(),
				[]
			));
			$instance->setRateLimiter();
			static::$instance = $instance;
		}
		return static::$instance;
	}

}