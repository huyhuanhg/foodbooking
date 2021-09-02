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
}
