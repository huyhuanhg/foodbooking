<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'store_rates';

    protected $primaryKey = ['user_id', 'store_id'];

    protected $fillable = [
        'store_id',
        'user_id',
        'rate',
    ];

}
