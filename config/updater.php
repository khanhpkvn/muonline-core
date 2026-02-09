<?php
use MUONLINECORE\Funcs;
return [
	'package_url' => Funcs::env('UPDATER_PACKAGE_URL', true) ?: ''
];