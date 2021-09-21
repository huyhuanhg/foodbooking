<?php

namespace App\Http\Requests;


class CommentRequest extends Request
{
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
            'store_id' => 'required|exists:stores,id',
            'content' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'store_id.required' => 'Cửa hàng không được bỏ trống!',
            'store_id.exists' => 'Cửa hàng không tồn tại!',
            'content.required' => 'Vui lòng nhập nội dung bình luận!',
        ];
    }
}
