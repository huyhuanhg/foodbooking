<?php

namespace App\Repositories;

use App\Models\FoodTag;
use App\Repositories\Interfaces\FoodTagInterface;

class FoodTagRepository implements FoodTagInterface
{
    protected $foodTag;

    public function __construct(FoodTag $foodTag)
    {
        $this->foodTag = $foodTag;
    }

    public function getTags()
    {
        return $this->foodTag->get();
    }
}
