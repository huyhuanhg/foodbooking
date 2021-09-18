<?php

namespace App\Http\Requests;

class UploadImageRequest extends Request
{
    public function rules()
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'k tồn tại',
            'image.image' => 'k phải ảnh',
            'image.mimes' => 'k Loại không đúng',
            'image.max' => 'k quá tải',
        ];
    }
}
