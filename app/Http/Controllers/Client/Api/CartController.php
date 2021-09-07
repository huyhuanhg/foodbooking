<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Services\CartService;
use Illuminate\Http\Request;

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
}
