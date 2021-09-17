<?php

namespace App\Repositories;

use App\Models\Food;
use App\Models\Like;
use App\Repositories\Interfaces\LikeInterface;

class LikeRepository implements LikeInterface
{
    protected $like, $food;

    public function __construct(Like $like, Food $food)
    {
        $this->like = $like;
        $this->food = $food;
    }

    public function toggle(int $foodId)
    {
        $food = $this->food->find($foodId);
        $userId = auth()->user()->id;
        $islike = $this->like->where('user_id', $userId)->where('food_id', $foodId);
        if ($islike->count() === 0) {
            $this->like->insert([
                'store_id' => $food->store_id,
                'food_id' => $foodId,
                'user_id' => $userId
            ]);
        } else {
            $islike->delete();
        }
    }
    public function getLikes(array $foodIds)
    {
        if (!empty($foodIds)) {
            return $this->like->select('food_id')->where('user_id', auth()->user()->id)->whereIn('food_id', $foodIds)->get();
        }
    }
}
