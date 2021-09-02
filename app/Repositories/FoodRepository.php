<?php

namespace App\Repositories;


use App\Models\Food;
use App\Repositories\Interfaces\FoodInterface;
use Illuminate\Support\Facades\DB;

class FoodRepository implements FoodInterface
{
    protected $food;

    public function __construct(Food $food)
    {
        $this->food = $food;
    }

    public function getTotalCount()
    {
        return $this->food->select(DB::raw('COUNT(id) AS total_foods'))->first();
    }
}
