<?php

namespace MUONLINECORE\App\WordPress\FrontPages;

use Illuminate\Http\Request;
use MUONLINECORE\App\Models\MUServerMEMB_INFO;
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

	/*
	 *
	 */

	public function login(Request $request) {
//		try {
			$user = MUServerMEMB_INFO::where('memb___id', $request->username)->first();

			if (!$user) {
				return back()->withErrors(['username' => 'Tài khoản không tồn tại']);
			}

//			if ($user->memb__pwd !== $request->password) {
//				return back()->withInput()->withErrors(['password' => 'Sai mật khẩu']);
//			}
//
//			// Lưu session thủ công
//			session([
//				'mu_user' => $user->memb___id
//			]);
//
//			return back()->with(['success', 'Đã đăng nhập thành công!']);
//		}
//		catch (\Exception $e) {
//			return false;
//		}
	}

}