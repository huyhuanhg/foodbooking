<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Repositories\Interfaces\CommentInterface;
use Illuminate\Support\Facades\DB;

class CommentRepository implements CommentInterface
{
    protected $comment;

    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function lastCommentByIds(array $storeIdList)
    {
        return
            $this->comment->select(
                'comments.store_id','comments.content', 'users.first_name', 'users.last_name', 'users.avatar'
            )->join(DB::raw('(
                        SELECT MAX(id) max_id
                        FROM comments
                        WHERE store_id IN (' . implode(',', $storeIdList) . ')
                        GROUP BY store_id) AS sub_cm'), 'sub_cm.max_id', 'comments.id')
                ->join('users', 'users.id', 'comments.user_id')
                ->get();
    }
}
