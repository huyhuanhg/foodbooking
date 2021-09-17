<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $table = 'bookmarks';

    protected $fillable = [
        'store_id',
        'user_id',
        'description',
    ];

}
