<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $objCategory;

    public function __construct()
    {
        $this->objCategory = new Category();
    }

    public function index()
    {
        $data ['totalCategories'] = $this->objCategory->totalCategories()->total;
        return view('pages.admins.dashboard.index', $data);
    }
}
