<?php

namespace App\Http\Requests;

class BookmarkRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'store_id' => 'required|exists:stores,id',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'store_id.required' => 'Cửa hàng không được bỏ trống!',
            'store_id.exists' => 'Cửa hàng không tồn tại!',
            'description.required' => 'Vui lòng chọn mô tả!',
        ];
    }
}
