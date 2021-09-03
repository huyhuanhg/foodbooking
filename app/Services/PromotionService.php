<?php

namespace App\Services;

use App\Repositories\Interfaces\FoodInterface;
use App\Repositories\Interfaces\FoodTagInterface;
use App\Repositories\Interfaces\PromotionInterface;

class PromotionService
{
    protected $food, $foodTab, $promotion;

    public function __construct(FoodInterface $food, FoodTagInterface $foodTab, PromotionInterface $promotion)
    {
        $this->food = $food;
        $this->foodTab = $foodTab;
        $this->promotion = $promotion;
    }

}
