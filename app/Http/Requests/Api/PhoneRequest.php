<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;

class PhoneRequest extends Request
{
    public $forceJsonResponse = true;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phone' => ['required', 'regex:/^(0|\+84)[3|5|7|8|9][\d+]{8}$/'],
        ];
    }
    public function messages()
    {
        return [
            'phone.required' => 'Vui lòng nhập số điện thoại!',
            'phone.regex' => 'Định dạng không đúng: 0... / +84...',
        ];
    }
}
