<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Services\StoreService;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    protected $storeService;

    public function __construct(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }

    public function index(){
        return response()->json($this->storeService->getStoreList());
    }
    public function show(Request $request, Store $store){
        return response()->json($this->storeService->getStoreDetail($store, $request));
    }
}
