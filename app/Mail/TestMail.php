<?php

namespace MUONLINECORE\App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use MUONLINECORE\Funcs;

class TestMail extends Mailable {

	use Queueable, SerializesModels;

	public $messageBody;

	/*
	 *
	 */

	public function __construct($messageBody = '') {
		$this->messageBody = $messageBody;
	}

	/*
	 *
	 */

	public function build() {
		return $this->from(Funcs::config('mail.from.address'), 'MUONLINECORE')
			->subject('[MUONLINECORE] Email từ WPSP - WordPress Starter Plugin')
			->view('emails.default.content')
			->with([
				'messageBody' => $this->messageBody
			]);
	}

}
