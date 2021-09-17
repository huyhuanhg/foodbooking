<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;

class FullNameRequest extends Request
{
    public $forceJsonResponse = true;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
        ];
    }
}
