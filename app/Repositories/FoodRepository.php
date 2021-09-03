<?php

namespace App\Repositories;


use App\Models\Food;
use App\Repositories\Interfaces\FoodInterface;
use Illuminate\Support\Facades\DB;

class FoodRepository implements FoodInterface
{
    protected $food;

    public function __construct(Food $food)
    {
        $this->food = $food;
    }

    public function getTotalCount()
    {
        return $this->food->select(DB::raw('COUNT(id) AS total_foods'))->first();
    }

    public function getFoods(int $limit)
    {
        return $this->food->select([
            'foods.id',
            'foods.store_id',
            'foods.food_name',
            'foods.food_avatar',
            'foods.price',
            'foods.food_description',
            'stores.store_name',
            'stores.store_not_mark',
            DB::raw('count(order_detail.food_id) as total_order')
        ])->join('stores', 'foods.store_id', 'stores.id')
            ->leftJoin('order_detail', 'order_detail.food_id', 'foods.id')
            ->groupBy('foods.id')->limit($limit)
            ->orderBy('foods.id', 'desc')->get();
    }

    public function findByIds(array $idList)
    {
        return $this->food->select([
            'foods.id',
            'foods.store_id',
            'foods.food_name',
            'foods.food_avatar',
            'foods.price',
            'foods.food_description',
            'stores.store_name',
            'stores.store_not_mark',
        ])->join('stores', 'foods.store_id', 'stores.id')
            ->whereIn('foods.id', $idList)->get();
    }
}
