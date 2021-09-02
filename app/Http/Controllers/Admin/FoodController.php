<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\FoodRequest;
use App\Models\Category;
use App\Models\Food;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class FoodController extends Controller
{
    private $objFood, $objCategory, $objStore;

    public function __construct()
    {
        $this->objFood = new Food();
        $this->objCategory = new Category();
        $this->objStore = new Store();
    }

    public function index()
    {
        $data['foods'] = $this->objFood->getAll();
        $data['categories'] = $this->objCategory->getList();
        $data['stores'] = $this->objStore->getStoreOwner();
        return view('pages.admins.foods.index', $data);
    }

    public function store(FoodRequest $request)
    {
        $lastPage = $request->page ? (int)$request->page : 1;
        $response = $this->objFood->create($request->all());
        return redirect()->route('foods', ['page' => $lastPage])->with($response['type'], $response['message']);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'food_name' => 'required',
            'price' => ['required', 'regex:/^\d+$/'],
            'category' => 'required',
            'store' => 'required',
            'food_active' => 'required',
        ], [
            'food_name.required' => 'Vui lòng nhập tên món ăn!',
            'price.regex' => 'Định dạng phải là số',
            'price.required' => 'Vui lòng nhập giá món ăn!',
            'category.required' => 'Vui lòng chọn danh mục món ăn!',
            'store.required' => 'Vui lòng chọn cửa hàng!',
            'food_active.required' => 'Vui lòng chọn tình trạng!',
        ]);
        if ($validator->fails()) {
            $avatarCurrent = Food::select('food_avatar')->find($id)->food_avatar;
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('foodAvatarCurrent', $avatarCurrent);
        }

        $lastPage = $request->page ? (int)$request->page : 1;
        if ($request->food_avatar) {
            $avatarPath = Food::select('food_avatar')->find($id)->food_avatar;
            if ($avatarPath) {
                $this->deleteOldFoodImg($avatarPath);
            }
        }
        $response = $this->objFood->updateFood($id, $request->all());
        return redirect()->route('foods', ['page' => $lastPage])->with($response['type'], $response['message']);
    }

    public function destroy($id)
    {
        $foodAvatar = Food::select('food_avatar')->find($id)->food_avatar;
        if ($foodAvatar) {
            $this->deleteOldFoodImg($foodAvatar);
        }
        $response = $this->objFood->destroyFood($id);
        return redirect()->route('foods')->with($response['type'], $response['message']);
    }

    public function uploadFoodAvatar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'food_avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $imageName = time() . '.' . $request->food_avatar->extension();
        $request->food_avatar->move(public_path('/images/uploads/food-avatar'), $imageName);
        return response()->json([
            'path' => "/images/uploads/food-avatar/$imageName",
            'fileName' => $imageName,
        ]);
    }

    public function deleteFoodAvatar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'path' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $this->deleteOldFoodImg($request->path);
    }

    private function deleteOldFoodImg($fileName)
    {
        $path = public_path($fileName);
        if (file_exists($path)) {
            unlink($path);
        }
    }
}
