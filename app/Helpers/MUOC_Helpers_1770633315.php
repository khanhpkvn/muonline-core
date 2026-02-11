<?php

use MUONLINECORE\App\Widen\Support\Facades\Auth;
use MUONLINECORE\App\Widen\Support\Facades\Cache;
use MUONLINECORE\App\Widen\Support\Facades\RateLimiter;
use MUONLINECORE\Funcs;
use MUONLINECORE\WPSP;

if (!function_exists('muoc_app')) {
	function muoc_app($abstract = null, $parameters = []) {
		static $app;

		if (!$app) {
			$app = WPSP::instance()->getApplication();
		}

		if (is_null($abstract)) {
			return $app;
		}

		return $app->make($abstract, $parameters);
	}
}

if (!function_exists('muoc_env')) {
	function muoc_env($var, $addPrefix = false, $default = null) {
		return Funcs::instance()->_env($var, $addPrefix, $default);
	}
}
if (!function_exists('muoc_auth')) {
	function muoc_auth($guard = null) {
		if (class_exists('\WPSPCORE\App\Auth\Auth')) {
			return Auth::instance()->guard($guard);
		}
		else {
			return null;
		}
	}
}
if (!function_exists('muoc_route')) {
	function muoc_route($routeClass, $routeName, $args = [], $buildURL = false) {
		return Funcs::route($routeClass, $routeName, $args, $buildURL);
	}
}
if (!function_exists('muoc_view')) {
	function muoc_view($viewName = null, $data = [], $mergeData = []) {
		return Funcs::instance()->_view($viewName, $data, $mergeData);
	}
}
if (!function_exists('muoc_view_inject')) {
	function muoc_view_inject($views, $callback) {
		return Funcs::instance()->_viewInject($views, $callback);
	}
}
if (!function_exists('muoc_asset')) {
	function muoc_asset($path, $secure = null) {
		return Funcs::instance()->_asset($path, $secure);
	}
}
if (!function_exists('muoc_debug')) {
	function muoc_debug($message = '', $print = false, $varDump = false) {
		Funcs::instance()->_debug($message, $print, $varDump);
	}
}
if (!function_exists('muoc_trans')) {
	function muoc_trans($string, $wordpress = false) {
		return Funcs::instance()->_trans($string, $wordpress);
	}
}
if (!function_exists('muoc_config')) {
	function muoc_config($key = null, $default = null) {
		return Funcs::instance()->_config($key, $default);
	}
}
if (!function_exists('muoc_notice')) {
	function muoc_notice($message = '', $type = 'info', $echo = false, $wrap = false, $class = null, $dismiss = true) {
		Funcs::instance()->_notice($message, $type, $echo, $wrap, $class, $dismiss);
	}
}
if (!function_exists('muoc_locale')) {
	function muoc_locale() {
		return Funcs::instance()->_locale();
	}
}
if (!function_exists('muoc_response')) {
	function muoc_response($message = '', $print = false, $varDump = false) {
		return Funcs::instance()->_response($message, $print, $varDump);
	}
}
if (!function_exists('muoc_main_path')) {
	function muoc_main_path($path = null) {
		return Funcs::instance()->_getMainPath($path);
	}
}
if (!function_exists('muoc_nonce_field')) {
	function muoc_nonce_field($action = -1, $name = '_wpnonce', $referer = true, $display = true) {
		return wp_nonce_field($action, $name, $referer, $display);
	}
}
if (!function_exists('muoc_resources_path')) {
	function muoc_resources_path($path = null) {
		return Funcs::instance()->_getResourcesPath($path);
	}
}
if (!function_exists('muoc_bearer_token')) {
	function muoc_bearer_token() {
		return Funcs::instance()->_getBearerToken();
	}
}
if (!function_exists('muoc_event')) {
	function muoc_event($event = null, $payload = []) {
		return Funcs::event($event, $payload);
	}
}
if (!function_exists('muoc_validate')) {
	function muoc_validate($data, $rules, $messages = [], $customAttributes = []) {
		return Funcs::validate($data, $rules, $messages, $customAttributes);
	}
}
if (!function_exists('muoc_validation')) {
	function muoc_validation() {
		return Funcs::validation();
	}
}
if (!function_exists('muoc_cache')) {
	function muoc_cache() {
		return Cache::instance();
	}
}
if (!function_exists('muoc_rate_limiter')) {
	function muoc_rate_limiter() {
		return RateLimiter::instance()->getRateLimiter();
	}
}
if (!function_exists('muoc_guild_logo')) {
	function muoc_guild_logo($code, $xy = 3) {

		// Turn hex into dec
		$code       = urlencode(bin2hex($code));
		$color[0]   = '';
		$color[1]   = '#000000';
		$color[2]   = '#8c8a8d';
		$color[3]   = '#ffffff';
		$color[4]   = '#fe0000';
		$color[5]   = '#ff8a00';
		$color[6]   = '#ffff00';
		$color[7]   = '#8cff01';
		$color[8]   = '#00ff00';
		$color[9]   = '#01ff8d';
		$color['a'] = '#00ffff';
		$color['b'] = '#008aff';
		$color['c'] = '#0000fe';
		$color['d'] = '#8c00ff';
		$color['e'] = '#ff00fe';
		$color['f'] = '#ff008c';

		// Set the default zero position.
		$i  = 0;
		$ii = 0;

		// Create the table
		$it = '<table style=\'margin:0;font-size: 0;width: ' . (8 * $xy) . 'px;height:' . (8 * $xy) . 'px\' border=0 cellpadding=0 cellspacing=0><tr>';

		// Start the logo drawing cycle for each color slot
		while ($i < 64) {

			// Get the slot color number
			$place = $code[$i];

			// Increase the slot
			$i++;
			$ii++;

			// Get the color of the slot

			$add = $color[$place];

			// Create the slot with its color

			$it .= '<td class=\'guildlogo\' style=\'background-color: ' . $add . ';\' width=\'' . $xy . '\' height=\'' . $xy . '\'></td>';

			// In case we have a new line
			if ($ii == 8) {
				$it .= '</tr>';
				if ($ii != 64) $it .= '<tr>';
				$ii = 0;
			}
		}

		// Finish the table off
		$it .= '</table>';

		// What do we output
		return $it;
	}
}

/*
 *
 */

if (!function_exists('muoc_abort')) {
	function muoc_abort($code, $message = '', $headers = []) {
		throw new \MUONLINECORE\App\Exceptions\HttpException($code, $message, $headers);
	}
}
if (!function_exists('muoc_abort_500')) {
	function muoc_abort_500($message = 'Internal Server Error') {
		muoc_abort(500, $message);
	}
}
if (!function_exists('muoc_abort_404')) {
	function muoc_abort_404($message = 'Page not found') {
		muoc_abort(404, $message);
	}
}
if (!function_exists('muoc_abort_403')) {
	function muoc_abort_403(string $message = 'Forbidden') {
		muoc_abort(403, $message);
	}
}
if (!function_exists('muoc_abort_503')) {
	function muoc_abort_503(string $message = 'Service Unavailable') {
		muoc_abort(503, $message);
	}
}
if (!function_exists('muoc_abort_401')) {
	function muoc_abort_401(string $message = 'Unauthorized') {
		muoc_abort(401, $message);
	}
}
if (!function_exists('muoc_abort_400')) {
	function muoc_abort_400(string $message = 'Bad Request') {
		muoc_abort(400, $message);
	}
}
if (!function_exists('muoc_abort_422')) {
	function muoc_abort_422(string $message = 'Unprocessable Entity') {
		muoc_abort(422, $message);
	}
}
if (!function_exists('muoc_abort_405')) {
	function muoc_abort_405(string $message = 'Method Not Allowed') {
		muoc_abort(405, $message);
	}
}