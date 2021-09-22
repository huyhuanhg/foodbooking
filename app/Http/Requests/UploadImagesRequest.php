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
            'images.required' => 'Danh sách ảnh không tồn tại!',
            'images.array' => 'Dữ liệu tải lên không phải danh sách!',
            'images.max' => 'Số lượng tải tối đa là 8!',
            'images.*.required' => 'Định dạng file không phải là ảnh!',
            'images.*.image' => 'Định dạng file không phải là ảnh!',
            'images.*.mimes' => 'Định dạng file không đúng!',
            'images.*.max' => 'Dung lượng ảnh quá lớn!',
        ];
    }
}
