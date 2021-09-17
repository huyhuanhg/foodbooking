<?php

namespace App\Http\Requests;


class LikeRequest extends Request
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
            'food_id' => 'required|exists:foods,id',
        ];
    }

    public function messages()
    {
        return [
            'food_id.required' => 'Món ăn không tồn tại',
            'food_id.exists' => 'Món ăn không tồn tại',
        ];
    }
}
