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

    public function getAll($currentPage = 1, $limit = 10)
    {
        return Food::join('categories', 'foods.category_id', 'categories.id')
            ->join('stores', 'foods.store_id', 'stores.id')->
            leftJoin('promotions', 'foods.id', 'promotions.food_id')->
            paginate(
                $limit,
                [
                    'foods.*',
                    'categories.category_name',
                    'stores.store_name',
                    'promotions.is_percent',
                    'promotions.discount',
                    'promotions.max_discount'
                ],
                'Quản lý món ăn',
                $currentPage
            );
    }
}
