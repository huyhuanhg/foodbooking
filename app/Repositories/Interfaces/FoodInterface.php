<?php

namespace App\Repositories\Interfaces;

interface FoodInterface
{
    public function getTotalCount();

    public function getFoods(
        int    $storeId,
        string $group,
        string $sort,
        int    $sortType,
        array  $tags,
        int    $page,
        int    $limit,
        int    $userId
    );

    public function findByIds(array $idList);
}
