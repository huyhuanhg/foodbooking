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
            'path.required' => 'Vui lòng nhập đường dẫn!',
            'path.string' => 'Đường dẫn phải là chuỗi!',
        ];
    }
}
