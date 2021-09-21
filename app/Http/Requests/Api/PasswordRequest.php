<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;
use App\Rules\ValidCurrentUserPassword;

class PasswordRequest extends Request
{
    public $forceJsonResponse = true;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'old_password' => ['required', 'string', 'min:6', new ValidCurrentUserPassword()],
            'password' => 'required|string|min:6|same:confirm_password|different:old_password',
            'confirm_password' => 'required|min:6',
        ];
    }

    public function messages()
    {
        return [
            'old_password.required' => 'Vui lòng nhập mật khẩu!',
            'old_password.string' => 'Định dạng mật khẩu không đúng',
            'old_password.min' => 'Mật khẩu tối thiểu 6 ký tự!',
            'password.required' => 'Vui lòng nhập mật khẩu!',
            'password.string' => 'Định dạng mật khẩu không đúng',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự!',
            'password.same' => 'Nhập lại mật khẩu không đúng!',
            'password.different' => 'Mật khẩu mới phải khác mật khẩu cũ!',
            'confirm_password.min' => 'Mật khẩu tối thiểu 6 ký tự!',
            'confirm_password.required' => 'Vui lòng nhập mật khẩu!',
        ];
    }
}
