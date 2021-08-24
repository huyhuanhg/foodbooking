<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
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

    public function getList()
    {
        return Category::select('id', 'category_name')->get();
    }

    public function getAllCategoriesInfo()
    {
        return Category::select('categories.*', DB::raw('count(foods.id) as food_totals'))->
        leftJoin('foods', function ($join) {
            $join->on('categories.id', '=', 'foods.category_id');
        })->groupBy('categories.id')->get();
    }

    public function create($dataCategory)
    {
        try {
            Category::insert([
                'category_name' => $dataCategory['category_name'],
                'category_not_mark' => vi_not_mark($dataCategory['category_name']),
                'category_description' => $dataCategory['category_description'] ?? '',
                'category_active' => (int)$dataCategory['category_active'],
            ]);
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.category_message.ADD_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.category_message.ADD_FAILURE')
            ];
        }
    }

    public function updateCategory($updateData)
    {
        try {
            DB::table($this->table)->
            where('id', '=', (int)$updateData['id'])->
            update([
                "category_name" => $updateData['category_name'],
                'category_not_mark' => vi_not_mark($updateData['category_name']),
                "category_active" => (int)$updateData['category_active'],
                "category_description" => $updateData['category_description'] ?? '',
            ]);
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.category_message.EDIT_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.category_message.EDIT_FAILURE')
            ];
        }
    }

    public function deleteCategory($id)
    {
        try {
            DB::table($this->table)->where('id', '=', $id)->delete();
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.category_message.DELETE_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.category_message.DELETE_FAILURE')
            ];
        }
    }

    public function totalCategories()
    {
        return Category::select(DB::raw('COUNT(id) AS total'))->first();
    }
}
