<?php

namespace App\Http\Requests;


class UserUpdateRequest extends Request
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
            'email' => 'required|email',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', 'regex:/^(0|\+84)[3|5|7|8|9][\d+]{8}$/'],
            'gender' => ['required', 'regex:/^[0|1]$/'],
            'address' => 'required',
            'province_code' => 'required|integer|min:1|max:96',
            'district_code' => 'required|integer|min:1|max:973',
            'ward_code' => 'required|integer|min:1|max:32248',
            'birthday' => 'required|date_format:Y-m-d|before:today',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập email!',
            'email.email' => 'Định dạng email không đúng!',
            'email.unique' => 'Email đã tồn tại!',
            'first_name.required' => 'Vui lòng nhập họ tên!',
            'first_name.regex' => 'Họ tên không hợp lệ!',
            'last_name.required' => 'Vui lòng nhập họ tên!',
            'last_name.regex' => 'Họ tên không hợp lệ!',
            'phone.required' => 'Vui lòng nhập số điện thoại!',
            'phone.regex' => 'Định dạng không đúng (0xxxx / +84xxxxx)',
            'gender.required' => 'Vui lòng chọn giới tính!',
            'gender.regex' => 'Giới tính không hợp lệ!',
        ];
    }
}
