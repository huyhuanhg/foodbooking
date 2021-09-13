<?php

namespace App\Repositories\Interfaces;

interface CommentInterface
{
    public function lastCommentByIds(array $storeIdList);
    public function getComments(int $storeId, int $limit, int $page);
    public function getPictures(array $storeIds);
    public function create(int $storeId, string $content, array $paths);
}
