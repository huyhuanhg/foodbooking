<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'store_name' => 'required',
            'phone_contact' => ['required', 'regex:/^(0|\+84)[3|5|7|8|9][\d+]{8}$/'],
            'store_address' => 'required',
            'store_status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'store_name.required' => 'Vui lòng nhập tên cửa hàng!',
            'phone_contact.required' => 'Vui lòng nhập số điện thoại!',
            'phone_contact.regex' => 'Định dạng: 0... / +84...',
            'store_address.required' => 'Vui lòng nhập địa chỉ!',
            'store_status.required' => 'Vui lòng chọn trạng thái!',
        ];
    }
}
