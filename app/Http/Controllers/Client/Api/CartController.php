<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiCartRequest;
use App\Services\CartService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{

    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index()
    {
        return response()->json($this->cartService->getList());
    }

    public function update(ApiCartRequest $request)
    {
        $response = $this->cartService->update($request->only('food', 'action'));
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }

    public function destroy(Request $request)
    {
        $response = $this->cartService->delete($request->food);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }
}
