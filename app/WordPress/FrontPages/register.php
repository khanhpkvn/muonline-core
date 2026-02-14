<?php

namespace MUONLINECORE\App\WordPress\FrontPages;

use Illuminate\Http\Request;
use MUONLINECORE\App\Http\Requests\RegisterRequest;
use MUONLINECORE\App\Models\MUServerMEMB_INFO;
use MUONLINECORE\App\Widen\Support\Facades\RateLimiter;
use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;
use WPSPCORE\App\WordPress\FrontPages\BaseFrontPage;

class register extends BaseFrontPage {

	use InstancesTrait;
	/*
	 *
	 */

	public function customProperties() {
//		$this->path = 'front-page\/([^\/]+)\/?$';
	}

	/*
	 *
	 */

	public function register(RegisterRequest $request) {
		$nonce = $request->get('_wpnonce');

		if (!wp_verify_nonce($nonce, 'register')) {
			return back()->withErrors(['invalid_nonce' => 'Yêu cầu không hợp lệ. Vui lòng thử lại!']);
		}

		// Rate limit for 10 requests per 60 seconds based on the user display name or request IP address.
		try {
			$key                = 'register_' . $this->funcs->_getAppShortName() . '_' . (wp_get_current_user()->display_name ?? $this->request->getClientIp());
			$maxAttempts        = 10;
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

//		try {
			$member = MUServerMEMB_INFO::query()->create([
				'memb___id' => $request->username,
				'memb_name' => $request->full_name,
				'memb__pwd' => $request->password,
				'mail_addr' => $request->email,
				'sno__numb' => 0,
				'post_code' => 1,
				'fpas_ques' => 'question',
				'fpas_answ' => 'answer',
				'mail_chek' => 0,
				'bloc_code' => 0,
				'ctl1_code' => 0,
				'AccountLevel' => 0,
			]);

//			if ($member) {
//				return back()->with(['success' => 'Đăng ký thành công']);
//			}
//			else {
//				return back()->withErrors(['error' => 'Đăng ký thất bại. Vui lòng thử lại sau!']);
//			}
//		}
//		catch (\Exception $e) {
//			return back()->withErrors(['error' => 'Đăng ký thất bại. Vui lòng thử lại sau!']);
//		}
	}

}