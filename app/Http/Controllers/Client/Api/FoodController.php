<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Services\FoodService;
use Illuminate\Support\Facades\Request;

class FoodController extends Controller
{
    protected $foodService;

    public function __construct(FoodService $foodService)
    {
        $this->foodService = $foodService;
    }


    public function promotions()
    {
        return response()->json($this->foodService->getPromotionInitial());
    }

    public function index()
    {
        return response()->json($this->foodService->getFoodList());
    }

    public function store()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
