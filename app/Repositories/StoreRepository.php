<?php

namespace App\Repositories;

use App\Models\Store;
use App\Models\User;
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

    public function getCategoryName(Store $store)
    {
        return $store->category()->select('store_cate_name')->first();
    }

    public function getTotalInfo(Store $store)
    {
        return collect([
            'total_comment' => $store->comments()->count(),
            'total_food' => $store->foods()->count(),
            'total_rating' => $store->rates()->count()
        ]);
    }

    public function userRate(Store $store, int $userId)
    {
        foreach ($store->userRate as $rows) {
            if ($rows->pivot->user_id === $userId) {
                return ['user_rate' => $rows->pivot->rate];
            }
        }
    }

    public function getByIds(array $ids)
    {
        return $this->store->select('id', 'store_not_mark', 'store_name')->whereIn('id', $ids)->get();
    }
}
