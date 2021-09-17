<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ValidCurrentUserPassword implements Rule
{

    /**
     * @inheritDoc
     */
    public function passes($attribute, $value)
    {
        return Hash::check($value, auth()->user()->password);
    }

    /**
     * @inheritDoc
     */
    public function message()
    {
        return 'Mật khẩu không đúng!';
    }
}
