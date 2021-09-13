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
            'paths.required' => 'k tồn tại',
            'paths.array' => 'k phải mảng',
            'paths.max' => 'quá tải',
        ];
    }
}
