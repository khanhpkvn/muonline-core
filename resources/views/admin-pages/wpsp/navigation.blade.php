<div class="nav-tab-wrapper">
	<a href="?page={{$menuSlug}}&tab=dashboard" class="nav-tab {{ !isset($requestParams['tab']) || $requestParams['tab'] == 'dashboard' ? 'nav-tab-active' : '' }}">{{ muoc_trans('messages.dashboard') }}</a>
	<a href="?page={{$menuSlug}}&tab=license" class="nav-tab {{ isset($requestParams['tab']) && $requestParams['tab'] == 'license' ? 'nav-tab-active' : '' }}">{{ muoc_trans('messages.license_key') }}</a>
	<a href="?page={{$menuSlug}}&tab=database" class="nav-tab {{ isset($requestParams['tab']) && $requestParams['tab'] == 'database' ? 'nav-tab-active' : '' }}">{{ muoc_trans('messages.database') }}</a>
	<a href="?page={{$menuSlug}}&tab=settings" class="nav-tab {{ isset($requestParams['tab']) && $requestParams['tab'] == 'settings' ? 'nav-tab-active' : '' }}">{{ muoc_trans('messages.settings') }}</a>
	<a href="?page={{$menuSlug}}&tab=tools" class="nav-tab {{ isset($requestParams['tab']) && $requestParams['tab'] == 'tools' ? 'nav-tab-active' : '' }}">{{ muoc_trans('messages.tools') }}</a>
	<a href="?page={{$menuSlug}}&tab=table" class="nav-tab {{ isset($requestParams['tab']) && $requestParams['tab'] == 'table' ? 'nav-tab-active' : '' }}">{{ muoc_trans('messages.table') }}</a>
	<a href="?page={{$menuSlug}}&tab=roles" class="nav-tab {{ isset($requestParams['tab']) && $requestParams['tab'] == 'roles' ? 'nav-tab-active' : '' }}">{{ muoc_trans('messages.roles') }}</a>
	<a href="?page={{$menuSlug}}&tab=permissions" class="nav-tab {{ isset($requestParams['tab']) && $requestParams['tab'] == 'permissions' ? 'nav-tab-active' : '' }}">{{ muoc_trans('messages.permissions') }}</a>
	<a href="?page={{$menuSlug}}&tab=users" class="nav-tab {{ isset($requestParams['tab']) && $requestParams['tab'] == 'users' ? 'nav-tab-active' : '' }}">{{ muoc_trans('messages.users') }}</a>
</div>