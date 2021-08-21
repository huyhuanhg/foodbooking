<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class Promotion extends Model
{
    use HasFactory;

    protected $table = 'promotions';
    protected $primaryKey = 'food_id';
    protected $fillable = [
        'food_id',
        'is_percent',
        'discount',
        'max_discount',
    ];

    public function getPromotionPaginate($currentPage = 1, $limit = 10)
    {
        return Promotion::leftJoin('foods', 'promotions.food_id', 'foods.id')->
        join('stores', 'foods.store_id', 'stores.id')->
        paginate(
            $limit,
            [
                'promotions.*',
                'stores.store_name',
                'foods.food_name',
                'foods.store_id',
                'foods.price',
                'foods.food_avatar',
            ],
            'Quản lý khuyến mãi',
            $currentPage
        );
    }

    public function updatePromotion($id, $dataUpdate)
    {
        try {
            DB::table($this->table)->where('food_id', '=', $id)->update([
                'discount' => $dataUpdate['discount'],
                'is_percent' => $dataUpdate['is_percent'],
                'max_discount' => ($dataUpdate['max_discount'] !== null && $dataUpdate['is_percent'] === '1') ?
                    $dataUpdate['max_discount'] :
                    null,
            ]);
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.promotion_message.EDIT_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.promotion_message.EDIT_FAILURE'),
                'error' => $e->getMessage()
            ];
        }
    }

    public function getFoodCurent($id)
    {
        return Promotion::select(
            'promotions.*',
            'foods.food_name',
            'foods.store_id',
            'foods.price',
            'foods.food_avatar')->
        join('foods', 'promotions.food_id', 'foods.id')->find($id);
    }
}
