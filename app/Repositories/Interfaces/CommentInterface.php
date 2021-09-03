<?php

namespace App\Repositories\Interfaces;

interface CommentInterface
{
    public function lastCommentByIds(array $storeIdList);
}
