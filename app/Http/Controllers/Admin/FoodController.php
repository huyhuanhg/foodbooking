<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Food;

class FoodController extends Controller
{
    private $objFood;

    public function __construct()
    {
        $this->objFood = new Food();
    }

    public function index()
    {
        $data['foods'] = $this->objFood->getAll();
        return view('pages.admins.foods.index', $data);
    }
}
