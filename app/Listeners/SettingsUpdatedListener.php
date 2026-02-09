<?php

namespace MUONLINECORE\App\Listeners;

use MUONLINECORE\App\Events\SettingsUpdatedEvent;
use MUONLINECORE\App\Jobs\AdminSendEmailJob;
use MUONLINECORE\App\Mail\TestMail;
use MUONLINECORE\App\Models\SettingsModel;
use MUONLINECORE\Funcs;

class SettingsUpdatedListener {

	/**
	 * Create the event listener.
	 */
	public function __construct(SettingsModel $settings) {
		//
	}

	public function handle(SettingsUpdatedEvent $event) {
		// Code here...
		AdminSendEmailJob::dispatch('khanhpkvn@gmail.com', new TestMail('Đã cập nhật settings!'))->onQueue('emails');
		Funcs::notice('SettingsUpdatedListener fired! in: ' . __FILE__);
	}

	public function shouldQueue() {
		return false;
	}

}