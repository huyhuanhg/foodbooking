<?php

namespace App\Http\Requests;

class DeleteImagesRequest extends Request
{
    public function rules()
    {
        return [
            'paths' => 'required|array|max:8',
            'paths.*' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'paths.required' => 'Danh sách không tồn tại!',
            'paths.array' => 'Danh sách không phải mảng',
            'paths.max' => 'Danh sách tối đa 8 phần tử',
        ];
    }
}
