<?php

namespace MUONLINECORE\App\Widen\Traits;

use MUONLINECORE\Funcs;

trait InstancesTrait {

	public static $instances = [];

	/**
	 * @return static
	 */
	public static function instance() {
		$class = static::class;

		if (!isset(self::$instances[$class])) {
			self::$instances[$class] = new static(
				Funcs::instance()->_getMainPath(),
				Funcs::instance()->_getRootNamespace(),
				Funcs::instance()->_getPrefixEnv(),
				[]
			);
		}

		return self::$instances[$class];
	}

	/*
	 *
	 */

	public function beforeInstanceConstruct() {
		$funcs               = Funcs::instance();
		$this->funcs         = $funcs;
		$this->mainPath      = $funcs->_getMainPath();
		$this->rootNamespace = $funcs->_getRootNamespace();
		$this->prefixEnv     = $funcs->_getPrefixEnv();
	}

}