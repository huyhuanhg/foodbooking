<?php

namespace App\Repositories\Interfaces;


interface BookmarkInterface
{
    public function getList();
    public function getByStoreId(int $storeId);
    public function create(int $storeId, string $description);
    public function update(int $storeId, string $description);
    public function delete(int $storeId);
}
