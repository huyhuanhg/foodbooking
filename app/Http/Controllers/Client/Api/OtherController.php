<?php

namespace App\Http\Controllers\Client\Api;

use App\Services\OtherService;

class OtherController
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
