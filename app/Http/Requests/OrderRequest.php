<?php

namespace App\Http\Requests;


class OrderRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => ['required', 'regex:/^(0|\+84)[3|5|7|8|9][\d+]{8}$/'],
            'address' => 'required',
            'full_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'Vui lòng nhập số điện thoại!',
            'phone.regex' => 'Định dạng: 0... / +84...',
            'address.required' => 'Vui lòng nhập địa chỉ!',
            'full_name.required' => 'Vui lòng nhập họ tên!',
        ];
    }
}
