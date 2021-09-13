<?php

namespace App\Http\Requests;

class DeleteImageRequest extends Request
{
    public function rules()
    {
        return [
            'path' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'path.required' => 'k tồn tại',
            'path.string' => 'k phải chuỗi',
        ];
    }
}
