<?php

namespace App\Http\Requests;



class UserRegisterRequest extends Request
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|same:confirm_password',
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => ['required', 'regex:/^(0|\+84)[3|5|7|8|9][\d+]{8}$/'],
            'gender' => ['required', 'regex:/^[0|1]$/'],
            'confirm_password' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập email!',
            'email.email' => 'Định dạng email không đúng!',
            'email.unique' => 'Email đã tồn tại!',
            'password.required' => 'Vui lòng nhập mật khẩu!',
            'password.same' => 'Nhập lại mật khẩu không đúng!',
            'password.string' => 'Định dạng mật khẩu không đúng!',
            'password.min' => 'Mật khẩu tối thiểu 6 ký tự!',
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
//    protected function failedValidation(Validator $validator)
//    {
//        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
//    }

}
