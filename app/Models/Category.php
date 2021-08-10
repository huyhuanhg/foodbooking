<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_name',
        'category_not_mark',
        'category_description',
        'category_active',
    ];

    public function getAllCategoriesActive()
    {
        return Category::where('category_active', 1)
            ->get();
    }

    public function getAllCategories()
    {
        return Category::get()->fresh();
    }

    public function create($dataCategory)
    {
        try {
//            $categoryTable = new Category();
//            $categoryTable->category_name = $dataCategory['category_name'];
//            $categoryTable->category_not_mark = $dataCategory['category_name'];
//            $categoryTable->category_description = $dataCategory['category_description'];
//            $categoryTable->category_active = (int)$dataCategory['category_active'];
//            $categoryTable->save();
            Category::insert([
                'category_name' => $dataCategory['category_name'],
                'category_not_mark' => $dataCategory['category_name'],
                'category_description' => $dataCategory['category_description'],
                'category_active' => (int)$dataCategory['category_active'],
            ]);
            return [
                'status' => true,
                'data' => $dataCategory
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    public function updateCategory($updateData)
    {
        try {
//            Category::where(['id' => (int)$updateData['id']])->first()->update([
//                "category_name" => $updateData['category_name'],
//                'category_not_mark'=>$updateData['category_name'],
//                "category_active" => (int)$updateData['category_active'],
//                "category_description" => $updateData['category_description'],
//            ]);
            DB::table($this->table)->where('id', '=', (int)$updateData['id'])->update([
                "category_name" => $updateData['category_name'],
                'category_not_mark' => $updateData['category_name'],
                "category_active" => (int)$updateData['category_active'],
                "category_description" => $updateData['category_description'],
            ]);
            return [
                'status' => true,
                'data' => $updateData
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }
    }

    public function deleteCategory($id)
    {
        try {
            DB::table($this->table)->where('id', '=', $id)->delete();
            return [
                'status' => true,
                'data' => $id
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
            ];
        }
    }
}
