<?php

namespace App\Http\Requests;


class CartRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'food' => 'required|exists:foods,id',
        ];
    }

    public function messages()
    {
        return [
            'food.exists' => 'Món ăn không tồn tại',
            'food.required' => 'Vui lòng nhập món ăn',
        ];
    }
}
