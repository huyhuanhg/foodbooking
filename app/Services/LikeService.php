<?php

namespace App\Services;

use App\Repositories\Interfaces\LikeInterface;

class LikeService
{
    protected $like;

    public function __construct(LikeInterface $like)
    {
        $this->like = $like;
    }

    public function checkLikeList($request)
    {
        $foodIds = $request->food_ids ?? [];
        $likes = $this->like->getLikes($foodIds);
        if ($likes) {
            return $likes->map(function ($like) {
                return $like->food_id;
            });
        } else {
            return [];
        }
    }

    public function toggle($foodId)
    {
        return $this->like->toggle($foodId);
    }
}
