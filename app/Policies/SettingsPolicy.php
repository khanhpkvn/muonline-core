<?php

namespace MUONLINECORE\App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use MUONLINECORE\App\Models\SettingsModel;
use MUONLINECORE\App\Models\UsersModel;

class SettingsPolicy {

	use HandlesAuthorization;

	public function viewAny(UsersModel $user) {
		return false;
	}

	public function view(UsersModel $user, SettingsModel $setting) {
		return false;
	}

	public function create(UsersModel $user) {
		return false;
	}

	public function update(UsersModel $user, SettingsModel $setting) {
		return $user->id === $setting->getAttribute('user_id');
	}

	public function delete(UsersModel $user, SettingsModel $setting) {
		return $user->id === $setting->getAttribute('user_id');
	}

	public function restore(UsersModel $user, SettingsModel $setting) {
		return $user->id === $setting->getAttribute('user_id');
	}

	public function forceDelete(UsersModel $user, SettingsModel $setting) {
		return $user->id === $setting->getAttribute('user_id');
	}

}