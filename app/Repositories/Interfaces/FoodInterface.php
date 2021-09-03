<?php

namespace App\Repositories\Interfaces;

interface FoodInterface
{
    public function getTotalCount();
    public function getFoods(int $limit);
    public function findByIds(array $idList);
}
