<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Services\StoreService;
use Symfony\Component\HttpFoundation\Request;

class StoreController extends Controller
{

    protected $storeService;

    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }

    public function index(Request $request)
    {
        return response()->json($this->storeService->getStoreList($request));
    }

    public function show(Request $request, Store $store)
    {
        return response()->json($this->storeService->getStoreDetail($store, $request));
    }

    public function showPictures(Request $request, Store $store)
    {
        return response()->json($this->storeService->getPictures($store, $request));
    }
}
