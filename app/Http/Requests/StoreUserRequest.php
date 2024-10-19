<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'username' => 'required|string|min:8|max:16|regex:/^[\w]+$/|unique:users,username',
            'password' => 'required|string|min:8|max:16|confirmed|regex:/^[\w]+$/',

        ];
    }

    public function messages()
    {
        return [
            'username.unique' => 'Tên người dùng đã tồn tại.',
            'username.required' => 'Vui lòng nhập tên người dùng.',
            'username.min' => 'Độ dài phải từ 8 đến 16 ký tự.',
            'username.max' => 'Độ dài phải từ 8 đến 16 ký tự.',
            'username.regex' => 'Tên người dùng không được chứa ký tự đặc biệt hoặc khoảng trắng.',

            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Độ dài phải từ 8 đến 16 ký tự.',
            'password.max' => 'Độ dài phải từ 8 đến 16 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
            'password.regex' => 'Mật khẩu không được chứa ký tự đặc biệt hoặc khoảng trắng.',

        ];
    }
}
