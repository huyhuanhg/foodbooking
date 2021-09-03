<?php

namespace App\Repositories;

use App\Models\Store;
use App\Repositories\Interfaces\OrderInterface;
use App\Repositories\Interfaces\StoreInterface;
use Illuminate\Support\Facades\DB;

class OrderRepository implements OrderInterface
{
    protected $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function getTotalCount()
    {
        return $this->store->select(DB::raw('COUNT(id) AS total_stores'))->first();
    }

    public function getStores(int $limit)
    {
        return $this->store->select('id' , 'store_name', 'store_not_mark', 'store_category', 'store_avatar', 'avg_rate' )->limit($limit)->get();
    }
}
