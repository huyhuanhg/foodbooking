<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Request;
use App\Rules\ValidCurrentUserPassword;

class PasswordRequest extends Request
{
    public $forceJsonResponse = true;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'old_password' => ['required', 'string', 'min:6', new ValidCurrentUserPassword()],
            'password' => 'required|string|min:6|same:confirm_password|different:old_password',
            'confirm_password' => 'required|min:6',
        ];
    }
}
