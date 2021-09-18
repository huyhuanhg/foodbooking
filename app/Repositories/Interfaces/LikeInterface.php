<?php

namespace App\Repositories\Interfaces;


interface LikeInterface
{
    public function toggle(int $foodId);

    public function getLikes(array $foodIds);
}
