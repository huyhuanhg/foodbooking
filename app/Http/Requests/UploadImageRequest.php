<?php

namespace App\Http\Requests;

class UploadImageRequest extends Request
{
    public function rules()
    {
        return [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Bạn chưa đăng ảnh nào!',
            'image.image' => 'Định dạng file phải là ảnh!',
            'image.mimes' => 'Định dạng ảnh không đúng!',
            'image.max' => 'Dung lượng ảnh quá lớn!',
        ];
    }
}
