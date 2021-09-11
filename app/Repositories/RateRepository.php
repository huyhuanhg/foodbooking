<?php

namespace App\Repositories;

use App\Models\Rate;
use App\Repositories\Interfaces\RateInterface;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class RateRepository implements RateInterface
{
    protected $rate;

    public function __construct(Rate $rate)
    {
        $this->rate = $rate;
    }

    public function create(int $storeId, int $rateIndex)
    {
        $this->rate->insert([
            'store_id' => $storeId,
            'user_id' => auth()->user()->id,
            'rate' => $rateIndex,
            'created_at' => now()
        ]);
    }

    public function getAvgRate(int $storeId)
    {
        $avgRate = $this->rate->select(DB::raw('AVG(rate) avg_rate'))
            ->where('store_id', $storeId)->groupBy('store_id')
            ->first();
        return round($avgRate->avg_rate, 1);
    }
}
