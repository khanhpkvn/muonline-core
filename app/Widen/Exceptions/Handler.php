<?php

namespace MUONLINECORE\App\Widen\Exceptions;

use MUONLINECORE\App\Widen\Traits\InstancesTrait;
use MUONLINECORE\Funcs;

/**
 * @property \MUONLINECORE\Funcs $funcs
 */
class Handler extends \WPSPCORE\App\Exceptions\Handler {

	use InstancesTrait;

	public $dontReport = [
		//
	];

	public $dontFlash = [
		'current_password',
		'password',
		'password_confirmation',
	];

	/*
	 *
	 */

	public function render(\Throwable $e) {
		parent::render($e);

		// AuthenticationException.
		if ($e instanceof \MUONLINECORE\App\Exceptions\AuthenticationException) {
			$this->handleAuthenticationException($e);
			exit;
		}

		// AuthorizationException.
		if ($e instanceof \MUONLINECORE\App\Exceptions\AuthorizationException || $e instanceof \Illuminate\Auth\Access\AuthorizationException) {
			$this->handleAuthorizationException($e);
			exit;
		}

		// HttpException.
		if ($e instanceof \MUONLINECORE\App\Exceptions\HttpException) {
			$this->handleHttpException($e);
			exit;
		}

		// TokenMismatchException.
		if ($e instanceof \Illuminate\Session\TokenMismatchException) {
			setcookie(
				Funcs::config('session.cookie'),
				'',
				time() - 3600,
				Funcs::config('session.path'),
				Funcs::config('session.domain'),
				Funcs::config('session.secure'),
				Funcs::config('session.http_only')
			);
			$this->handleHttpException($e);
			exit;
		}

		// ValidationException -> InvalidDataException.
		if ($e instanceof \Illuminate\Validation\ValidationException) {
//			$this->handleValidationException($e);
			(new \MUONLINECORE\App\Exceptions\InvalidDataException($e->getMessage(), 422, $e))->render();
			exit;
		}

		// ModelNotFoundException -> ModelNotFoundException.
		if ($e instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
//			$this->handleModelNotFoundException($e);
			(new \MUONLINECORE\App\Exceptions\ModelNotFoundException($e->getModel(), $e->getMessage()))->render();
			exit;
		}

		// QueryException.
		if ($e instanceof \MUONLINECORE\App\Exceptions\QueryException) {
			$this->handleQueryException($e);
			exit;
		}

		// Các exception khác -> sử dụng Ignition
		$this->fallbackToIgnition($e);
	}

	public function report(\Throwable $e) {
		parent::report($e);

		if (Funcs::env('APP_DEBUG', true) == 'true') {
			error_log(sprintf(
				'[%s] %s in %s:%s',
				get_class($e),
				$e->getMessage(),
				$e->getFile(),
				$e->getLine()
			));
		}
	}

}