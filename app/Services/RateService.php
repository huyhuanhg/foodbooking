<?php

namespace App\Services;

use App\Repositories\Interfaces\RateInterface;
use App\Repositories\Interfaces\StoreInterface;

class RateService
{
    protected $rate, $store;

    public function __construct(RateInterface $rate, StoreInterface $store)
    {
        $this->rate = $rate;
        $this->store = $store;
    }

    public function create($request)
    {
        $storeId = $request->store_id;
        $this->rate->create($storeId, $request->rate);
        $avgRate = $this->rate->getAvgRate($storeId);
        $this->store->updateAvgRate($storeId, $avgRate);
        return $avgRate;
    }
}
