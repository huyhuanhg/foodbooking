<?php

namespace App\Services;

use App\Repositories\Interfaces\FoodInterface;
use App\Repositories\Interfaces\PromotionInterface;
use App\Repositories\Interfaces\StoreInterface;
use App\Repositories\Interfaces\UserInterface;

class OtherService
{

    protected $userInterface;
    protected $storeInterface;
    protected $foodInterface;
    protected $promotionInterface;

    public function __construct(
        UserInterface      $userInterface,
        StoreInterface     $storeInterface,
        FoodInterface      $foodInterface,
        PromotionInterface $promotionInterface
    )
    {
        $this->userInterface = $userInterface;
        $this->storeInterface = $storeInterface;
        $this->foodInterface = $foodInterface;
        $this->promotionInterface = $promotionInterface;
    }

    public function getTotalCount()
    {
        return [
            'total_users' => $this->userInterface->getTotalCount()->total_users,
            'total_stores' => $this->storeInterface->getTotalCount()->total_stores,
            'total_foods' => $this->foodInterface->getTotalCount()->total_foods,
            'total_promotions' => $this->promotionInterface->getTotalCount()->total_promotions,
        ];
    }
}
