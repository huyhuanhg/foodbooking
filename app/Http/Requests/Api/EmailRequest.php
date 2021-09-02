<?php

namespace App\Http\Requests\Api;


use App\Http\Requests\Request;

class EmailRequest extends Request
{
    public $forceJsonResponse = true;
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
            'email' => ['required', 'regex:/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/']
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập email!',
            'email.email' => 'Định dạng email không đúng!'
        ];
    }
}
