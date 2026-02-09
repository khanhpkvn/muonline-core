<?php

namespace MUONLINECORE\App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use MUONLINECORE\App\Events\UsersRegisteredEvent;
use MUONLINECORE\App\Jobs\AdminSendEmailJob;
use MUONLINECORE\App\Jobs\AdminSendTelegramJob;
use MUONLINECORE\App\Mail\TestMail;
use MUONLINECORE\App\Notifications\UsersVerifyEmailNotification;

class UsersRegisteredListener {

	/**
	 * Create the event listener.
	 */
	public function __construct() {
		//
	}

	/**
	 * Handle the event.
	 */
	public function handle(UsersRegisteredEvent $event) {

		// Send email verification cho user (queue).
		$event->user->notify(new UsersVerifyEmailNotification());

		// Send email cho admin thông báo có user mới đăng ký (queue).
//		AdminSendEmailJob::dispatch('khanhpkvn@gmail.com', new TestMail('Đã có user mới đăng ký: ' . $event->user->name ?? 'N/A'))->onQueue('admin_email');

		// Send telegram notification cho admin thông báo có user mới đăng ký (queue).
//		AdminSendTelegramJob::dispatch('Đã có thành viên mới đăng ký; ' . $event->user->name ?? 'N/A')->onQueue('admin_telegram');

	}

}
