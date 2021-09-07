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

    public function getFoods(
        int    $storeId,
        string $group,
        string $sort,
        int    $sortType,
        array  $tags,
        int    $page,
        int    $limit,
        int    $userId
    )
    {
        $food = $this->food->join('stores', 'foods.store_id', 'stores.id')
            ->leftJoin('order_detail', 'order_detail.food_id', 'foods.id')
            ->groupBy('foods.id');

        if ($group !== '') {
            if ($group === 'promotion') {
                $food = $food->where("foods.$group", 1);
            } elseif ($userId > 0 && $group === 'liked') {
                $food = $food->join('likes', 'foods.id', 'likes.food_id')
                    ->where('likes.user_id', $userId);
            }
        }

        if ($storeId > 0) {
            $food = $food->where('foods.store_id', $storeId);
        }

        if ($sort && $sortType !== 0) {
            $food = $food->orderBy("foods.$sort", $sortType < 0 ? "DESC" : "ASC");
        }
        if (!empty($tags)) {
            $food = $food->join('food_tag_detail', 'food_tag_detail.food_id', 'foods.id'
//                DB::raw(
//                    '(
//                                SELECT parent.food_id FROM food_tag_detail parent
//                                INNER JOIN (
//	                                SELECT food_id, COUNT(food_id) `count` FROM food_tag_detail sub
//	                                WHERE sub.tag_id IN (' . implode(',', $tags) . ')
//	                                GROUP BY food_id
//                               ) child ON parent.food_id = child.food_id AND `count` = ' . count($tags) . '
//                               GROUP BY parent.food_id
//                            ) tag'), 'tag.food_id', 'foods.id'
            )->whereIn('food_tag_detail.tag_id', $tags);
        }
        return
            $food->paginate(
                $limit,
                [
                    'foods.id',
                    'foods.store_id',
                    'foods.food_name',
                    'foods.food_avatar',
                    'foods.price',
                    'foods.food_description',
                    'stores.store_name',
                    'stores.store_not_mark',
                    DB::raw('count(order_detail.food_id) as total_order')
                ],
                'Danh sách món ăn',
                $page
            );
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
