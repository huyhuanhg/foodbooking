<?php

namespace App\Http\Controllers\Client\Api;

use App\Http\Controllers\Controller;
use App\Services\OtherService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


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

    public function address(Request $request)
    {
        $provinceCode = $request->p;
        $districtCode = $request->d;
        $provinces = ['provinces' => $this->callApi()];
        if ($provinceCode) {
            $districts = collect($this->callApi("p/$provinceCode?depth=2"))->only('districts');
            $provinces = $districts->merge($provinces);
            if ($districtCode) {
                $wards = collect($this->callApi("d/$districtCode?depth=2"))->only('wards');
                $provinces = $wards->merge($provinces);
            }
        }
        return response()->json($provinces);

    }

    public function districts(Request $request)
    {
        $provinceCode = $request->p;
        if (!$provinceCode) {
            return response()->json([], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $districts = $this->callApi("p/$provinceCode?depth=2");
        return response()->json($districts->districts);
    }

    public function wards(Request $request)
    {
        $districtCode = $request->d;
        if (!$districtCode) {
            return response()->json([], Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $wards = $this->callApi("d/$districtCode?depth=2");
        return response()->json($wards->wards);
    }

    public function callApi($path = null)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://provinces.open-api.vn/api/$path",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }
}
