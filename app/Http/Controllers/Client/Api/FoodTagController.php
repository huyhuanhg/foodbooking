<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Services\FoodTagService;
use Symfony\Component\HttpFoundation\Response;

class FoodTagController extends Controller
{


    protected $foodTagService;

    public function __construct(FoodTagService $foodTagService)
    {
        $this->foodTagService = $foodTagService;
    }

    public function index()
    {
        $response = $this->foodTagService->getList();
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

}
