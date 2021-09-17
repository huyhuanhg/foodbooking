<?php

namespace App\Repositories;

use App\Models\Promotion;
use App\Repositories\Interfaces\PromotionInterface;
use Illuminate\Support\Facades\DB;

class PromotionRepository implements PromotionInterface
{
    protected $promotion;

    public function __construct(Promotion $promotion)
    {
        $this->promotion = $promotion;
    }

    public function getTotalCount()
    {
        return $this->promotion->select(DB::raw('COUNT(id) AS total_promotions'))->first();
    }

    public function findByFoodId(array $foodIdList)
    {
        return $this->promotion->select([
            'food_id',
            'is_percent',
            'discount',
            'max_discount',
            'start_time',
            'end_time'
        ])
            ->whereIn('food_id', $foodIdList)->get();
    }

    public function getPromotions(int $limit)
    {
        return $this->promotion->select([
            'id',
            'food_id',
            'is_percent',
            'discount',
            'max_discount',
            'start_time',
            'end_time',
        ])->limit($limit)->orderBy('id', 'desc')->get();
    }
}
