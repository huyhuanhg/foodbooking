<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    private $objCategory;
    public function __construct()
    {
        $this->objCategory = new Category();
    }

    public function index(){
        $data['categories'] = $this->objCategory->getAllCategories();
        return view('pages.admins.categories.index',$data);
    }
}
