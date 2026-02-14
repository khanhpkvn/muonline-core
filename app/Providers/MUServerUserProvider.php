<?php

namespace MUONLINECORE\App\Providers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;

class MUServerUserProvider implements UserProvider {

	protected $model;

	/*
	 *
	 */

	public function __construct($hasher = null, $model = null) {
		$this->model = $model;
	}

	/*
	 *
	 */

	protected function createModel() {
		$class = '\\' . ltrim($this->model, '\\');

		return new $class;
	}

	/*
	 *
	 */

	public function retrieveById($identifier) {
		return $this->createModel()->newQuery()->find($identifier);
	}

	public function retrieveByCredentials(array $credentials) {
		if (empty($credentials['memb___id'])) {
			return null;
		}

		return $this->createModel()
			->newQuery()
			->where('memb___id', $credentials['memb___id'])
			->first();
	}

	public function validateCredentials(Authenticatable $user, array $credentials) {
		return $credentials['password'] === $user->getAuthPassword();
	}

	public function rehashPasswordIfRequired(Authenticatable $user, array $credentials, bool $force = false) {
		// MU Server dùng plain text.
		// Không bao giờ rehash.
	}

	public function retrieveByToken($identifier, $token) {
		return null;
	}

	public function updateRememberToken(Authenticatable $user, $token) {
		// MEMB_INFO không có remember_token
	}

}
