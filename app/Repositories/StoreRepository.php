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

    public function getStores(
        string $group,
        string $sort,
        int    $sortType,
        int    $category,
        int    $page,
        int    $limit,
        int    $userId,
        string $search
    )
    {
        $stores = $this->store->leftJoin('comments', 'comments.store_id', 'stores.id')
            ->leftJoin('foods', 'foods.store_id', 'stores.id')
            ->leftJoin('order_detail', 'order_detail.store_id', 'stores.id')
            ->groupBy('stores.id');
        if ($group === 'bookmark' && $userId > 0) {
            $stores = $stores->join('bookmarks', 'bookmarks.store_id', 'stores.id')
                ->where('bookmarks.user_id', $userId);
        }
        if ($search) {
            $stores = $stores->where('stores.store_name', 'LIKE', "%$search%");
        }
        if ($category > 0) {
            $stores = $stores->where('stores.store_category', $category);
        }
        if ($search) {
            $stores = $stores->where('stores.store_name', 'LIKE', "%$search%");
        }
        if ($sort) {
            if ($sort === 'total_order') {
                $stores = $stores->orderBy("$sort", $sortType !== -1 ? "DESC" : "ASC");
            } else {
                $stores = $stores->orderBy("stores.$sort", $sortType !== -1 ? "DESC" : "ASC");
            }
        }
        return $stores->paginate(
            $limit,
            [
                'stores.id',
                'stores.store_name',
                'stores.store_not_mark',
                'stores.store_category',
                'stores.store_address',
                'stores.store_image',
                'stores.avg_rate',
                DB::raw('count(comments.id) as total_comment'),
                DB::raw('count(foods.store_id) as total_food'),
                DB::raw('count(order_detail.store_id) as total_order')
            ],
            'Danh sách cửa hàng',
            $page
        );
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

    public function updateAvgRate(int $storeId, float $avgRate)
    {
        $store = $this->store->find($storeId);
        $store->avg_rate = $avgRate;
        $store->save();
    }

    public function getPictures(Store $store, int $page, int $limit)
    {
        $commentPictures = $store->comments()
            ->select('picture_path')
            ->join('comment_picture_detail', 'comments.id', 'comment_picture_detail.comment_id')
            ->join('comment_picture', 'comment_picture.id', 'comment_picture_detail.comment_picture_id');
        return $store->foods()->select(DB::raw('food_image picture_path'))
            ->union($commentPictures)->paginate(
                $limit,
                ['picture_path'],
                'Danh sách hình ảnh',
                $page
            );;
    }
}
