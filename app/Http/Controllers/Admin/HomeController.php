<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Food;
use App\Models\Order;
use App\Models\Promotion;
use App\Models\Store;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $objCategory, $objStore, $objFood, $objOrder, $objPromotion, $objUser;

    public function __construct()
    {
        $this->objCategory = new Category();
        $this->objStore = new Store();
        $this->objFood = new Food();
        $this->objOrder = new Order();
        $this->objPromotion = new Promotion();
        $this->objUser = new User();
    }

    public function index()
    {
        $data ['totalCategories'] = $this->objCategory->totalCategories()->total;
        $data ['totalStores'] = $this->objStore->totalStores()->total;
        $data ['totalFoods'] = $this->objFood->totalFoods()->total;
        $data ['totalOrders'] = $this->objOrder->totalOrders()->total;
        $data ['totalPromotions'] = $this->objPromotion->totalPromotions()->total;
        $data ['totalUsers'] = $this->objUser->totalUsers()->total;
        return view('pages.admins.dashboard.index', $data);
    }
}
