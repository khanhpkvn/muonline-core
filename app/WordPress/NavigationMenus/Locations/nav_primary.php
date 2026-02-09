<?php

namespace MUONLINECORE\App\WordPress\NavigationMenus\Locations;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use WPSPCORE\App\WordPress\NavigationMenus\Locations\BaseNavigationLocation;

class nav_primary extends BaseNavigationLocation {

	use InstancesTrait;

	// Args.
//	public $location    = '';
	public $description = 'Navigation primary';

	/*
	 *
	 */

	public function customProperties() {
//		$this->location    = 'nav_primary';
//		$this->description = 'Primary navigation menu';
	}

}