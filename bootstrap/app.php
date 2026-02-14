<?php

use MUONLINECORE\App\Widen\Routes\RouteManager;
use MUONLINECORE\App\Widen\Routes\RouteMap;
use MUONLINECORE\routes\Actions;
use MUONLINECORE\routes\AdminPages;
use MUONLINECORE\routes\Ajaxs;
use MUONLINECORE\routes\Apis;
use MUONLINECORE\routes\Blocks;
use MUONLINECORE\routes\Filters;
use MUONLINECORE\routes\FrontPages;
use MUONLINECORE\routes\MetaBoxes;
use MUONLINECORE\routes\NavLocations;
use MUONLINECORE\routes\PostTypeColumns;
use MUONLINECORE\routes\PostTypes;
use MUONLINECORE\routes\RewriteFrontPages;
use MUONLINECORE\routes\Schedules;
use MUONLINECORE\routes\Shortcodes;
use MUONLINECORE\routes\Taxonomies;
use MUONLINECORE\routes\TaxonomyColumns;
use MUONLINECORE\routes\ThemeTemplates;
use MUONLINECORE\routes\UserMetaBoxes;
use MUONLINECORE\routes\WPRoles;
use MUONLINECORE\WPSP;

require_once __DIR__ . '/../vendor/autoload.php';

// Bootstrap routes.
add_action('init', function() {
	/**
	 * ---
	 * Start application.
	 */
	WPSP::start();

	/**
	 * ---
	 * Đăng ký routes.
	 */
	foreach ([
		WPRoles::class,
		Shortcodes::class,
		Apis::class,
		Ajaxs::class,
		Schedules::class,
		PostTypes::class,
		PostTypeColumns::class,
		MetaBoxes::class,
		ThemeTemplates::class,
		Taxonomies::class,
		TaxonomyColumns::class,
		AdminPages::class,
		NavLocations::class,
		UserMetaBoxes::class,
		RewriteFrontPages::class,
		FrontPages::class,
		Blocks::class,
		Actions::class,
		Filters::class,
	] as $route) {
		(new $route())->register();
	}

	/**
	 * ---
	 * Chạy tất cả các route đã đăng ký.
	 */
	RouteManager::instance()->executeAllRoutes();
}, 1);