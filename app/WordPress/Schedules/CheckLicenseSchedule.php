<?php

namespace MUONLINECORE\App\WordPress\Schedules;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\App\WordPress\License\License;
use WPSPCORE\App\WordPress\Schedules\BaseSchedule;

class CheckLicenseSchedule extends BaseSchedule {

	use InstancesTrait;

	public function run() {
		error_log('Run schedule: CheckLicenseSchedule');
		$checkLicense = License::checkLicense(true);
	}

}