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


    public function getStoreList($limit = 12)
    {
        $stores = $this->store->getStores($limit);

        $storeIdList = $stores;
        $storeIdList = $storeIdList->pluck('id')->toArray();
        $lastComment = $this->comment->lastCommentByIds($storeIdList);
        $this->addLastComment($stores, $lastComment);
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

    protected function addLastComment($storeList, $commentList)
    {
        foreach ($storeList as $store) {
            $lastComment = $commentList->where('store_id', $store->id)->first();
            if (!empty($lastComment)) {
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
