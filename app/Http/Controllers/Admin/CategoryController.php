<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CategoryController extends Controller
{
    private $objCategory;

    public function __construct()
    {
        $this->objCategory = new Category();
    }

    public function index()
    {
        $data['categories'] = $this->objCategory->getAllCategoriesInfo();
        return view('pages.admins.categories.index', $data);
    }

    public function store(CategoryRequest $request)
    {
        $response = $this->objCategory->create($request->all());
        return redirect()->route('categories')->with($response['type'], $response['message']);
    }

    public function update(CategoryRequest $request)
    {
        $response = $this->objCategory->updateCategory($request->all());
        return redirect()->route('categories')->with($response['type'], $response['message']);
    }

    public function delete(Request $request)
    {
        $response = $this->objCategory->deleteCategory((int)$request->id);
        return redirect()->route('categories')->with($response['type'], $response['message']);
    }
}
