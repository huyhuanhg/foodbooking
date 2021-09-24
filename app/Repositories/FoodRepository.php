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
        int    $userId,
        string $search
    )
    {
        $food = $this->food->join('stores', 'foods.store_id', 'stores.id');

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

        if (!empty($tags)) {
            $tags = implode(',', $tags);
            $food = $food->join(
                DB::raw("(SELECT ftd.food_id FROM food_tag_detail ftd WHERE ftd.tag_id in (${tags})  GROUP BY ftd.food_id) f_tags"),
                'f_tags.food_id', 'foods.id'
            );

        }


        if ($sort && $sortType !== 0) {
            if ($sort === 'price') {
                $food = $food->orderBy('discount', $sortType < 0 ? "DESC" : "ASC");
            } else {
                $food = $food->orderBy("foods.$sort", $sortType < 0 ? "DESC" : "ASC");
            }
        }

        if ($search) {
            $food = $food->where('foods.food_not_mark', 'LIKE', "%$search%");
        }
        return $food->paginate(
            $limit,
            [
                'foods.id',
                'foods.store_id',
                'foods.food_name',
                'foods.food_image',
                'foods.price',
                'foods.discount',
                'foods.food_consume',
                'foods.food_description',
                'stores.store_name',
                'stores.store_not_mark',
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
            'foods.food_image',
            'foods.price',
            'foods.food_description',
            'stores.store_name',
            'stores.store_not_mark',
        ])->join('stores', 'foods.store_id', 'stores.id')
            ->whereIn('foods.id', $idList)->get();
    }

    public function updateConsume(array $foodIds, array $foodInfo)
    {
        foreach ($foodIds as $foodKey => $foodId) {
            $food = Food::find($foodId);
            $food->food_consume = $food->food_consume + $foodInfo[$foodKey]['quantity'];
            $food->save();
        }
    }
}
