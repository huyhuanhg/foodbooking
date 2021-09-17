<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Services\FoodService;
use Symfony\Component\HttpFoundation\Request;

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

    public function index(Request $request)
    {
        return response()->json($this->foodService->getFoodList($request));
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
