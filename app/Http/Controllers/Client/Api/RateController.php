<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ApiRateRequest;
use App\Services\RateService;
use Symfony\Component\HttpFoundation\Response;

class RateController extends Controller
{
    protected $rateService;

    public function __construct(RateService $rateService)
    {
        $this->rateService = $rateService;
    }

    public function store(ApiRateRequest $request)
    {
        $response = $this->rateService->create($request);
        return response()->json($response, $response['status'] ?? Response::HTTP_OK);
    }
}
