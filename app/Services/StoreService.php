<?php

namespace App\Services;

use App\Repositories\Interfaces\CategoryInterface;
use App\Repositories\Interfaces\CommentInterface;
use App\Repositories\Interfaces\StoreInterface;

class StoreService
{
    protected $store, $category, $comment;

    public function __construct(
        StoreInterface    $store,
        CategoryInterface $category,
        CommentInterface  $comment
    )
    {
        $this->store = $store;
        $this->category = $category;
        $this->comment = $comment;
    }


    public function getStoreList($request)
    {
        $stores = $this->store->getStores(
            $request->group ?? '',
            $request->sort ?? 'created_at',
            $request->sort_type ?? -1,
            $request->category ?? 0,
            $request->page ?? 1,
            $request->limit ?? 24,
            $request->user ?? 0,
            $request->search ?? ''
        );
        if (count($stores) > 0) {
            $storeIdList = $stores;
            $storeIdList = $storeIdList->pluck('id')->toArray();
            $lastComment = $this->comment->lastCommentByIds($storeIdList);
            $this->addLastComment($stores, $lastComment);
        }
        $categories = $this->category->getCategories();
        return [
            'stores' => $stores,
            'categories' => $categories,
        ];
    }

    public function getStoreDetail($store, $request)
    {
        $total = $this->store->getTotalInfo($store)->merge($store);
        $categoryName = $this->store->getCategoryName($store);
        $userRate = null;
        if ($request->user) {
            $userRate = $this->store->userRate($store, $request->user);
        }
        return $total->merge($categoryName)->merge($userRate);
    }

    public function getPictures($store, $request, $limit = 20)
    {
        return $this->store->getPictures($store, $request->page ?? 1, $limit);
    }

    protected function addLastComment($storeList, $commentList)
    {
        foreach ($storeList as $store) {
            $lastComment = $commentList->where('store_id', $store->id)->first();
            if (!empty($lastComment)) {
                $store->total_comment = $lastComment->total_comment;
                $store->setAttribute('last_comment',
                    $lastComment->only(
                        'content',
                        'first_name',
                        'last_name',
                        'avatar'
                    ));
            }
        }
    }
}
