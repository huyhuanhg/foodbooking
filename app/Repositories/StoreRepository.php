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
}
