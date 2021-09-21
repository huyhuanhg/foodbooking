<?php

namespace App\Http\Requests;


class RateRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'store_id' => 'required|exists:stores,id',
            'rate' => 'required|integer|min:1|max:5',
        ];
    }

    public function messages()
    {
        return [
            'store_id.required' => 'Cửa hàng không tồn tại',
            'store_id.exists' => 'Cửa hàng không tồn tại',
            'rate.required' => 'Vui lòng nhập chỉ số đánh giá!',
            'rate.integer' => 'Đánh giá không hợp lệ!',
            'rate.min' => 'Đánh giá không hợp lệ!',
            'rate.max' => 'Đánh giá không hợp lệ!',
        ];
    }
}
