<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'order_number_phone' => ['required', 'regex:/^(0|\+84)[3|5|7|8|9][\d+]{8}$/'],
            'order_address' => 'required',
            'order_status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'order_number_phone.required' => 'Vui lòng nhập số điện thoại!',
            'order_number_phone.regex' => 'Định dạng: 0... / +84...',
            'order_address.required' => 'Vui lòng nhập địa chỉ!',
            'order_status.required' => 'Vui lòng chọn trạng thái!',
        ];
    }
}
