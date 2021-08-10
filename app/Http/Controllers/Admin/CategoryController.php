<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $objCategory;

    public function __construct()
    {
        $this->objCategory = new Category();
    }

    public function index()
    {
        $data['categories'] = $this->objCategory->getAllCategories();
        return view('pages.admins.categories.index', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'category_active' => 'required',
        ]);
        $this->objCategory->create($request->all());
        return redirect()->route('categories');
    }
    public function update(Request $request)
    {
        $status = $this->objCategory->updateCategory($request->all());
        return redirect()->route('categories');
    }
    public function delete(Request $request)
    {
        $status = $this->objCategory->deleteCategory((int)$request->id);
        return redirect()->route('categories');
    }
}
