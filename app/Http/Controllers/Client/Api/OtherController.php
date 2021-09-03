<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Services\OtherService;

class OtherController extends Controller
{
    protected $otherService;

    public function __construct(OtherService $otherService)
    {
        $this->otherService = $otherService;
    }

    public function getDataSectionListed()
    {
        return response()->json($this->otherService->getTotalCount());
    }
}
