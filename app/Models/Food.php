<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class Food extends Model
{

    use HasFactory;

    protected $table = 'foods';
    protected $primaryKey = 'id';
    protected $fillable = [
        'store_id',
        'food_name',
        'food_not_mark',
        'food_active',
        'food_image',
        'promotion',
        'price',
        'discount',
        'food_profit',
        'food_consume',
        'food_description',
    ];

    public function store()
    {
        return $this->hasOne(Store::class, 'store_id');
    }

    public function foodTags()
    {
        return $this->belongstoMany(FoodTag::class, 'food_tag_detail', 'food_id', 'tag_id');
    }

    public function getAll($currentPage = 1, $limit = 10)
    {
        return Food::join('categories', 'foods.category_id', 'categories.id')
            ->join('stores', 'foods.store_id', 'stores.id')->
            leftJoin('promotions', 'foods.id', 'promotions.food_id')->
            paginate(
                $limit,
                [
                    'foods.*',
                    'categories.category_name',
                    'stores.store_name',
                    'promotions.is_percent',
                    'promotions.discount',
                    'promotions.max_discount',
                ],
                'Quản lý món ăn',
                $currentPage
            );
    }

    public function create($foodData)
    {
        try {
            $food = new Food();
            $food->store_id = $foodData['store'];
            $food->category_id = $foodData['category'];
            $food->food_name = $foodData['food_name'];
            $food->food_not_mark = vi_not_mark($foodData['food_name']);
            $food->food_active = $foodData['food_active'];
            $food->price = $foodData['price'];
            $food->food_description = $foodData['food_description'];
            if ($foodData['food_avatar']) {
                $food->food_avatar = $foodData['food_avatar'];
            }
            $food->save();
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.food_message.ADD_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.food_message.ADD_FAILURE'),
                'error' => $e->getMessage()
            ];
        }
    }

    public function updateFood($id, $foodData)
    {
        try {
            $food = Food::find($id);
            $food->store_id = $foodData['store'];
            $food->category_id = $foodData['category'];
            $food->food_name = $foodData['food_name'];
            $food->food_not_mark = vi_not_mark($foodData['food_name']);
            $food->food_active = $foodData['food_active'];
            $food->price = $foodData['price'];
            $food->food_description = $foodData['food_description'];
            if ($foodData['food_avatar']) {
                $food->food_avatar = $foodData['food_avatar'];
            }
            $food->save();
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.food_message.EDIT_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.food_message.EDIT_FAILURE'),
            ];
        }
    }

    public function destroyFood($id)
    {
        try {
            Food::destroy($id);
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.food_message.DELETE_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.food_message.DELETE_FAILURE'),
            ];
        }
    }

    public function totalFoods()
    {
        return Food::select(DB::raw('COUNT(id) AS total'))->first();
    }

    public function addDiscount()
    {
        return $this->join(DB::raw("
                (SELECT child.id, (
                    CASE
                    	WHEN promotions.is_percent = 1
                        THEN (
                        	CASE
                            	WHEN (price * promotions.discount / 100) < promotions.max_discount
                            	THEN (price - price * promotions.discount / 100)
                            	ELSE promotions.max_discount
                            END
                        )
                        ELSE
                    		(case
                    				WHEN promotions.is_percent = 0
                                    then (price - promotions.discount)
                                    else child.price
                    		end)

                    END) discount FROM `foods` child
                    LEFT JOIN promotions ON promotions.food_id = child.id) sub"), 'sub.id', 'foods.id');
    }
}
