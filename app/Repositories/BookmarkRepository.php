<?php

namespace App\Repositories;

use App\Models\Bookmark;
use App\Repositories\Interfaces\BookmarkInterface;
use Symfony\Component\HttpFoundation\Response;

class BookmarkRepository implements BookmarkInterface
{
    protected $bookmark;

    public function __construct(Bookmark $bookmark)
    {
        $this->bookmark = $bookmark;
    }

    public function getList()
    {
        return $this->bookmark
            ->join('stores', 'stores.id', 'bookmarks.store_id')
            ->where('user_id', auth()->user()->id)->get();
    }

    public function getByStoreId(int $storeId)
    {
        return $this->bookmark->where('store_id', $storeId)->where('user_id', auth()->user()->id)->first();
    }

    public function create(int $storeId, string $description)
    {
        return $this->bookmark->insert([
            'user_id' => auth()->user()->id,
            'store_id' => $storeId,
            'description' => $description,
            'created_at' => now()
        ]);
    }

    public function update(int $storeId, string $description)
    {
        return $this->bookmark->where('user_id', auth()->user()->id)
            ->where('store_id', $storeId)
            ->update([
                'description' => $description,
                'updated_at' => now()
            ]);
    }

    public function delete(int $storeId)
    {
        return $this->bookmark->where('user_id', auth()->user()->id)
            ->where('store_id', $storeId)
            ->delete();
    }
}
