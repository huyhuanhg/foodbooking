<?php

namespace App\Repositories\Interfaces;

use App\Models\Store;

interface StoreInterface
{
    public function getTotalCount();
    public function getStores(int $limit);
    public function getCategoryName(Store $store);
    public function getTotalInfo(Store $store);
    public function userRate(Store $store,  int $userId);
    public function getByIds(array $ids);
}
