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
			'name'  => 'required|string|max:255',
		];
	}

	/**
	 * Tùy chỉnh cách phản hồi khi validate không thành công.
	 */
	public function failedValidation($validator) {
//		if ($this->expectsJson()) {
//			wp_send_json([
//				'success' => false,
//				'errors'  => $validator->errors()->messages(),
//				'message' => 'Dữ liệu không hợp lệ',
//			], 422);
//			exit;
//		}

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

//		throw new InvalidDataException($errorList);

//		parent::failedValidation($validator);
	}

}
