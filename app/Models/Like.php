<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table = 'likes';

    protected $fillable = [
        'store_id',
        'user_id',
        'food_id',
    ];

}
