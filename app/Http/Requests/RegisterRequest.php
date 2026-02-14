<?php

namespace MUONLINECORE\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use MUONLINECORE\App\Exceptions\InvalidDataException;

class RegisterRequest extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array {
		return [
			'full_name'  => 'required|string|max:10',
			'username'   => 'required|string|max:10|unique:mu_server.MEMB_INFO,memb___id',
			'email'      => 'required|string|email|unique:mu_server.MEMB_INFO,mail_addr',
			'password'   => ['required', 'string', 'min:6', 'max:10', 'confirmed'],
		];
	}

	/**
	 * (Tùy chọn) Tùy chỉnh tên hiển thị cho các field.
	 */
	public function attributes() {
		return [
			'full_name'             => 'Tên',
			'username'              => 'Tài khoản',
			'password'              => 'Mật khẩu',
			'email'                 => 'Email',
			'password_confirmation' => 'Xác nhận mật khẩu',
		];
	}

	/**
	 * Tùy chỉnh cách phản hồi khi validate không thành công.
	 */
	public function failedValidation($validator) {
		$errors = $validator->errors()->all();
		$errorList = '<ul>';
		foreach ($errors as $error) {
			$errorList .= '<li>' . esc_html($error) . '</li>';
		}
		$errorList .= '</ul>';

		// Nếu là Rest API thì cần phải chuyển header content type sang HTML.
		header('Content-Type: text/html; charset=utf-8');

		echo view('errors.default', [
			'message'      => 'Vui lòng kiểm tra lại dữ liệu theo thông tin bên dưới:',
			'code'         => 422,
			'errorMessage' => $errorList,
			'status'       => 'Dữ liệu không hợp lệ',
		]);
		exit;
	}

}
