<?php

namespace MUONLINECORE\App\WordPress\WPRoles;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use WPSPCORE\App\WordPress\WPRoles\BaseWPRole;

class super_admin extends BaseWPRole {

	use InstancesTrait;

//	public $role         = 'super_admin';
	public $display_name = 'Super Admin';
	public $capabilities = [
		'edit_pages',
		'manage_options',
//		'edit_themes',
	];

	/*
	 *
	 */

	public function customProperties() {
//		$this->capabilities = [];
	}

}