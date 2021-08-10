<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'promotions';
    protected $fillable = [
        'food_id',
        'is_percent',
        'discount',
        'max_discount',
    ];

    public function getAll()
    {
        return Promotion::select(
            DB::raw('promotions.*, stores.store_name, foods.food_name, foods.store_id, foods.price, foods.food_avatar')
        )->
        leftJoin('foods', 'promotions.food_id', 'foods.id')->join('stores', 'foods.store_id', 'stores.id')->get();
    }
}
