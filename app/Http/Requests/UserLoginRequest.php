<?php

namespace App\Http\Requests;



class UserLoginRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập email!',
            'password.required' => 'Vui lòng nhập mật khẩu!',
            'email.email' => 'Định dạng email không đúng!',
            'password.string' => 'Định dạng mật khẩu không đúng!',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự!',
        ];
    }
}
