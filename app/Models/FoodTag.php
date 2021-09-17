<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodTag extends Model
{
    use HasFactory;

    protected $table = 'food_tags';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tag_name',
        'tag_description',
        'tag_active',
    ];

}
