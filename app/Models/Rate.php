<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'store_rates';

    protected $fillable = [
        'store_id',
        'user_id',
        'rate',
    ];

}
