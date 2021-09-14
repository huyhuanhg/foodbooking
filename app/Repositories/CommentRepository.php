<?php

namespace App\Repositories;

use App\Models\Comment;
use App\Models\CommentPicture;
use App\Repositories\Interfaces\CommentInterface;
use Illuminate\Support\Facades\DB;

class CommentRepository implements CommentInterface
{
    protected $comment, $commentPicture;

    public function __construct(Comment $comment, CommentPicture $commentPicture)
    {
        $this->comment = $comment;
        $this->commentPicture = $commentPicture;
    }

    public function getComments(int $storeId, int $limit, int $page)
    {
        $comment = $this->comment;
        if ($storeId === -1) {
            if (auth()->check()) {
                $comment = $comment->where('user_id', auth()->user()->id);
            }
        } else {
            $comment = $comment->where('comments.store_id', $storeId);
        }
        return $comment->join('users', 'users.id', 'comments.user_id')
            ->orderBy('comments.created_at', 'DESC')
            ->join('stores', 'comments.store_id', 'stores.id')->paginate(
                $limit,
                [
                    DB::raw('users.id user_id'),
                    'comments.store_id',
                    'comments.id',
                    'comments.created_at',
                    DB::raw('users.avatar user_avatar'),
                    'users.first_name',
                    'users.last_name',
                    'comments.content',
                    'stores.store_not_mark',
                    'stores.store_name',
                    'stores.store_avatar',
                ],
                'Danh sách bình luận',
                $page
            );;
    }

    public function getPictures(array $storeIds)
    {
        return DB::table('comment_picture_detail')
            ->select('comment_id', 'picture_path')
            ->join('comment_picture', 'comment_picture_id', 'id')
            ->whereIn('comment_id', $storeIds)->get();
    }

    public function lastCommentByIds(array $storeIdList)
    {
        return
            $this->comment->select(
                'comments.store_id', 'comments.content', 'users.first_name', 'users.last_name', 'users.avatar'
            )->join(DB::raw('(
                        SELECT MAX(id) max_id
                        FROM comments
                        WHERE store_id IN (' . implode(',', $storeIdList) . ')
                        GROUP BY store_id) AS sub_cm'), 'sub_cm.max_id', 'comments.id')
                ->join('users', 'users.id', 'comments.user_id')
                ->get();
    }

    public function create(int $storeId, string $content, array $paths)
    {
        $comment = new Comment();
        $comment->store_id = $storeId;
        $comment->user_id = auth()->user()->id;
        $comment->content = $content;
        $comment->save();
        if (!empty($paths)) {
            $pictureComment = [];
            foreach ($paths as $path) {
                $picture = new CommentPicture();
                $picture->picture_path = $path;
                $picture->save();
                array_push($pictureComment, $picture->id);
            }
            $comment->commentPictures()->attach($pictureComment);
        }
        return $comment;
    }
}
