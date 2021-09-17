<?php

namespace App\Repositories\Interfaces;

interface CommentInterface
{
    public function lastCommentByIds(array $storeIdList);

    public function getComments(int $storeId, int $userId, int $limit, int $page);

    public function getPictures(array $commentIds);

    public function create(int $storeId, string $content, array $paths);
}
