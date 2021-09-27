<?php

namespace App\Services;

use App\Repositories\Interfaces\FoodInterface;
use App\Repositories\Interfaces\FoodTagInterface;
use App\Repositories\Interfaces\PromotionInterface;

class FoodTagService
{
    protected $foodTabInterface;

    public function __construct(FoodTagInterface $foodTabInterface)
    {
        $this->foodTabInterface = $foodTabInterface;
    }

    public function getList()
    {
        return $this->foodTabInterface->getTags();
    }

}
