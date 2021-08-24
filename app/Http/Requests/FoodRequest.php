<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodRequest extends FormRequest
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
            'food_name' => 'required',
            'price' => ['required', 'regex:/^\d+$/'],
            'category' => 'required',
            'store' => 'required',
            'food_active' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'food_name.required' => 'Vui lòng nhập tên món ăn!',
            'price.regex' => 'Định dạng phải là số',
            'price.required' => 'Vui lòng nhập giá món ăn!',
            'category.required' => 'Vui lòng chọn danh mục món ăn!',
            'store.required' => 'Vui lòng chọn cửa hàng!',
            'food_active.required' => 'Vui lòng chọn tình trạng!',
        ];
    }
}
