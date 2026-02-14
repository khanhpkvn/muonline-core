<?php

namespace MUONLINECORE\App\WordPress\FrontPages;

use Illuminate\Http\Request;
use MUONLINECORE\App\Models\MUServerMEMB_INFO;
use MUONLINECORE\App\Widen\Support\Facades\RateLimiter;
use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;
use WPSPCORE\App\WordPress\FrontPages\BaseFrontPage;

class login extends BaseFrontPage {

	use InstancesTrait;
	/*
	 *
	 */

	public function customProperties() {
//		$this->path = 'front-page\/([^\/]+)\/?$';
	}

	public function submit(Request $request) {
		$action = $request->input('action');
		if ($action == 'login') {
			return $this->login($request);
		}
		elseif ($action == 'logout') {
			Funcs::auth('mu_server')->logout();
			return back()->with(['success' => 'logout']);
		}
		return back();
	}

	/*
	 *
	 */

	public function login(Request $request) {
		try {
			// Rate limit for 10 requests per 60 seconds based on the user display name or request IP address.
			try {
				$key                = 'login_' . $this->funcs->_getAppShortName() . '_' . (wp_get_current_user()->display_name ?? $this->request->getClientIp());
				$maxAttempts        = 5;
				$rateLimit          = RateLimiter::attempt($key, $maxAttempts, function() {});
				$rateLimitRemaining = RateLimiter::remaining($key, $maxAttempts);
				$rateLimitAccepted  = $rateLimit;
			}
			catch (\Throwable $e) {
				$rateLimitAccepted  = true;
				$rateLimitRemaining = null;
			}

			if (false === $rateLimitAccepted) {
				throw new \MUONLINECORE\App\Exceptions\HttpException(
					429,
					'Bạn đã gửi quá nhiều yêu cầu. Vui lòng thử lại sau.',
					['Retry-After' => 60]
				);
			}

			$user = MUServerMEMB_INFO::where('memb___id', $request->username)->first();

			if (!$user) {
				return back()->withInput()->withErrors(['username' => 'Sai tài khoản hoặc mật khẩu. Vui lòng thử lại!']);
			}

			if ($user->memb__pwd !== $request->password) {
				return back()->withInput()->withErrors(['password' => 'Sai tài khoản hoặc mật khẩu. Vui lòng thử lại!']);
			}

			// Đăng nhập.
			if (!Funcs::auth('mu_server')->attempt([
				'memb___id' => $request->username,
				'password' => $request->password,
			])) {
				return back()->withInput()->withErrors([
					'username' => 'Sai tài khoản hoặc mật khẩu. Vui lòng thử lại!',
				]);
			}

			return back()->with(['success' => 'login']);
		}
		catch (\Exception $e) {
			return back()->withErrors(['error' => 'Đã có lỗi xảy ra. Vui lòng thử lại!']);
		}
	}

}