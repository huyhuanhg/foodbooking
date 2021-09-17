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

    public function getList(array $storeIds, int $page, int $limit)
    {
        $bookmarks = $this->bookmark->join('stores', 'stores.id', 'bookmarks.store_id')
            ->join('store_categories', 'store_categories.id', 'stores.store_category')
            ->where('user_id', auth()->user()->id);
        if (!empty($storeIds)) {
            return $bookmarks
                ->select('store_id')
                ->whereIn('stores.id', $storeIds)->get();
        }
        return $bookmarks->orderBy('bookmarks.created_at', 'DESC')->paginate(
            $limit,
            [
                'store_id',
                'store_name',
                'store_not_mark',
                'store_avatar',
                'store_address',
                'store_description',
                'store_categories.store_cate_name',
                'description',
                'bookmarks.created_at',
            ],
            'Danh sách bộ sưu tập',
            $page
        );
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
