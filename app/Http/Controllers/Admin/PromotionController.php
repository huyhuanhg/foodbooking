<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PromotionController extends Controller
{
    private $objPromotion;

    public function __construct()
    {
        $this->objPromotion = new Promotion();
    }

    public function index(Request $request)
    {
        $currentPage = $request->page ? (int)$request->page : 1;
        $data['promotions'] = $this->objPromotion->getPromotionPaginate($currentPage);
        return view('pages.admins.promotions.index', $data);
    }

    public function update(Request $request, $id)
    {
        $request['max_discount'] = $request->max_discount ?? 0;
        $validator = Validator::make($request->all(), [
            'discount' => ['required', 'regex:/^\d+$/'],
            'max_discount' => ['regex:/^[\d+]$/'],
        ], [
            'discount.required' => 'Vui lòng nhập mục này!',
            'discount.regex' => 'Định dạng phải là số',
            'max_discount.regex' => 'Định dạng phải là số',
        ]);
        if ($validator->fails()) {
            $foodCurrent = $this->objPromotion->getFoodCurent($id);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('foodCurrent', $foodCurrent);
        }
        $response = $this->objPromotion->updatePromotion($id, $request->all());
        return redirect()->route('promotions')->with($response['type'], $response['message']);
    }

    public function destroy($id)
    {
        $response = $this->objPromotion->destroyPromotion($id);
        return redirect()->route('promotions')->with($response['type'], $response['message']);
    }
}
