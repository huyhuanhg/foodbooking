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

    public function getList(int $page, int $limit)
    {
        return $this->rate
            ->join('stores', 'stores.id', 'store_rates.store_id')
            ->join('store_categories', 'store_categories.id', 'stores.store_category')
            ->orderBy('store_rates.created_at', 'DESC')->paginate(
                $limit,
                [
                    'stores.id',
                    'stores.store_name',
                    'stores.store_not_mark',
                    'stores.store_image',
                    'stores.store_address',
                    'stores.store_description',
                    'store_categories.store_cate_name',
                    'store_rates.rate',
                    'store_rates.created_at',

                ],
                'Đánh giá của bạn',
                $page
            );
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
