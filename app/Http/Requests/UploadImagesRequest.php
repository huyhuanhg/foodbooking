<?php

namespace App\Http\Requests;

class UploadImagesRequest extends Request
{
    public function rules()
    {
        return [
            'images' => 'required|array|max:8',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'images.required' => 'k tồn tại',
            'images.array' => 'k phải ảnh',
            'images.max' => 'k quá tải',
            'images.*.image' => 'không phải là ảnh'
        ];
    }
}
