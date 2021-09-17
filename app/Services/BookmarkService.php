<?php

namespace App\Services;

use App\Repositories\Interfaces\BookmarkInterface;
use Symfony\Component\HttpFoundation\Response;

class BookmarkService
{
    protected $bookmark;

    public function __construct(BookmarkInterface $bookmark)
    {
        $this->bookmark = $bookmark;
    }

    public function getBookmarks($request, $limit = 20)
    {
        return $this->bookmark->getList($request['store_ids'] ?? [],$request['page'] ?? 1, $limit);
    }

    public function getBookmarkById($store)
    {
        $bookmark = $this->bookmark->getByStoreId($store->id);
        if (empty($bookmark)){
            return [
                'status' => Response::HTTP_FAILED_DEPENDENCY,
            ];
        }
        return $bookmark->setAttribute('store_info', $store);
    }

    public function create($request)
    {
        return $this->bookmark->create($request->store_id, $request->description);
    }

    public function update($request)
    {
        return $this->bookmark->update($request->store_id, $request->description);
    }
    public function delete($store){
        return $this->bookmark->delete($store->id);
    }
}
