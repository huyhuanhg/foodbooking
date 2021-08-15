<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{

    use HasFactory;

    protected $table = 'foods';
    protected $primaryKey = 'id';
    protected $fillable = [
        'store_id',
        'category_id',
        'food_name',
        'food_not_mark',
        'food_active',
        'food_avatar',
        'promotion',
        'price',
        'food_profit',
        'food_consume',
        'food_description',
        'avg_rate',
    ];

    public function getAll()
    {
        return Food::select('foods.*', 'categories.category_name', 'stores.store_name',
            'promotions.is_percent', 'promotions.discount', 'promotions.max_discount')->join('categories', function ($join) {
            $join->on('foods.category_id', '=', 'categories.id');
        })->join('stores', function ($join) {
            $join->on('foods.store_id', '=', 'stores.id');
        })->leftJoin('promotions', function ($join) {
            $join->on('foods.id', '=', 'promotions.food_id');
        })->get();
    }
}
