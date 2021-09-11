<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiOrderRequest;
use App\Services\OrderService;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{

    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }

    public function store(ApiOrderRequest $request)
    {
        $response = $this->orderService->create($request);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }
}
