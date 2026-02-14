<?php

namespace MUONLINECORE\App\WordPress\FrontPages;

use Illuminate\Http\Request;
use MUONLINECORE\App\Models\MUServerMEMB_INFO;
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

	public function register(Request $request) {
//		$nonce = $request->get('_wpnonce');

//		if (!wp_verify_nonce($nonce, 'register')) {
//			wp_redirect('/register');
//			exit;
//		}

//		try {
//			$member = MUServerMEMB_INFO::query()->create([
//				'memb___id' => $request->memb___id,
//				'memb_name' => $request->memb_name,
//				'memb__pwd' => $request->memb__pwd,
//				'mail_addr' => $request->mail_addr,
//				'sno__numb' => 0,
//				'post_code' => 1,
//				'fpas_ques' => 'question',
//				'fpas_answ' => 'answer',
//				'mail_chek' => 0,
//				'bloc_code' => 0,
//				'ctl1_code' => 0,
//				'AccountLevel' => 0,
//			]);
//		}
//		catch (\Exception $e) {
//			echo $e->getMessage();
//			return false;
//		}
	}

}