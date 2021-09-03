<?php

namespace App\Repositories;

use App\Models\Store;
use App\Repositories\Interfaces\StoreInterface;
use Illuminate\Support\Facades\DB;

class StoreRepository implements StoreInterface
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
        return $this->store->select(
            'stores.id',
            'stores.store_name',
            'stores.store_not_mark',
            'stores.store_category',
            'stores.store_address',
            'stores.store_avatar',
            'stores.avg_rate',
            DB::raw('count(comments.id) as total_comment'),
            DB::raw('count(foods.store_id) as total_food'))
            ->leftJoin('comments', 'comments.store_id', 'stores.id')
            ->leftJoin('foods', 'foods.store_id', 'stores.id')
            ->groupBy('stores.id')->limit($limit)->get();


    }
}
