<?php

namespace App\Repositories\Interfaces;

use App\Models\Store;

interface StoreInterface
{
    public function getTotalCount();

    public function getStores(
        string $group,
        string $sort,
        int    $sortType,
        int    $category,
        int    $page,
        int    $limit,
        int    $userId,
        string $search
    );

    public function getCategoryName(Store $store);

    public function getTotalInfo(Store $store);

    public function userRate(Store $store, int $userId);

    public function getByIds(array $ids);

    public function updateAvgRate(int $storeId, float $avgRate);

    public function getCommentPictures(Store $store, int $page, int $limit);
}
