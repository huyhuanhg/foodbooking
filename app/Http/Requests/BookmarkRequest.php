<?php

namespace App\Http\Requests;

class BookmarkRequest extends Request
{
    public function rules()
    {
        return [
            'store_id' => 'required|exists:stores,id',
            'description' => 'required',
        ];
    }
}
