<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    private $objPromotion;

    public function __construct()
    {
        $this->objPromotion = new Promotion();
    }

    public function index()
    {
        $data['promotions'] = $this->objPromotion->getAll();
        return view('pages.admins.promotions.index', $data);
    }
}
