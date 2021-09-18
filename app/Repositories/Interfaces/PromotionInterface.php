<?php

namespace App\Repositories\Interfaces;

interface PromotionInterface
{
    public function getTotalCount();

    public function findByFoodId(array $foodIdList);

    public function getPromotions(int $limit);
}
