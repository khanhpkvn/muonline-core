<?php
if (isset($requestParams['tab']) && $requestParams['tab'] == 'license') {
	$title = muoc_trans('License key', true);
	$view  = muoc_resources_path('/views/admin-pages/wpsp/license.php');
}
elseif (isset($requestParams['tab']) && $requestParams['tab'] == 'database') {
	$title = muoc_trans('Database', true);
	$view  = muoc_resources_path('/views/admin-pages/wpsp/database.php');
}
elseif (isset($requestParams['tab']) && $requestParams['tab'] == 'settings') {
	$title = muoc_trans('Settings', true);
	$view  = muoc_resources_path('/views/admin-pages/wpsp/settings.php');
}
elseif (isset($requestParams['tab']) && $requestParams['tab'] == 'tools') {
	$title = muoc_trans('Tools', true);
	$view  = muoc_resources_path('/views/admin-pages/wpsp/tools.php');
}
elseif (isset($requestParams['tab']) && $requestParams['tab'] == 'table') {
	$title = muoc_trans('Table', true);
	$view  = muoc_resources_path('/views/admin-pages/wpsp/table.php');
}
elseif (isset($requestParams['tab']) && $requestParams['tab'] == 'roles') {
	$title = muoc_trans('Roles', true);
	$afterTitle = ' <a href="' . muoc_route('AdminPages', 'wpsp.roles.index', ['action' => 'create'], true) . '" class="page-title-action">' . muoc_trans('Add new', true) . '</a>';
	$afterTitle .= ' <a href="' . muoc_route('AdminPages', 'wpsp.roles.index', ['action' => 'refresh'], true) . '" class="page-title-action button-primary">' . muoc_trans('Refresh all custom roles', true) . '</a>';
	$view  = muoc_resources_path('/views/admin-pages/wpsp/roles.php');
}
elseif (isset($requestParams['tab']) && $requestParams['tab'] == 'permissions') {
	$title = muoc_trans('Permissions', true);
	$afterTitle = ' <a href="' . muoc_route('AdminPages', 'wpsp.permissions.index', ['action' => 'create'], true) . '" class="page-title-action">' . muoc_trans('Add new', true) . '</a>';
	$view  = muoc_resources_path('/views/admin-pages/wpsp/permissions.php');
}
elseif (isset($requestParams['tab']) && $requestParams['tab'] == 'users') {
	$title = muoc_trans('Users', true);
	$afterTitle = ' <a href="' . muoc_route('AdminPages', 'wpsp.users.create', true) . '" class="page-title-action">' . muoc_trans('Add new', true) . '</a>';
	$view  = muoc_resources_path('/views/admin-pages/wpsp/users.php');
}
else {
	$title = muoc_trans('Dashboard', true);
	$view  = muoc_resources_path('/views/admin-pages/wpsp/dashboard.php');
}

$navigation = muoc_resources_path('/views/admin-pages/wpsp/navigation.php');

include muoc_resources_path('/views/admin-pages/header.php');
include $view;
include muoc_resources_path('/views/admin-pages/footer.php');