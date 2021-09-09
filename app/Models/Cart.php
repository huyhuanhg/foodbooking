<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cart extends Model
{

    use HasFactory;

    protected $table = 'carts';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
    ];
    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
    public function foods(){
        $foods = $this->belongstoMany(Food::class, 'cart_detail', 'cart_id', 'food_id')
            ->select('foods.*', 'stores.store_name', 'stores.store_not_mark', 'discount')
            ->join('stores', 'foods.store_id','stores.id');
        return $this->addDiscount($foods);
    }

    public function cartDetail(){
        return $this
            ->belongstoMany(Food::class, 'cart_detail', 'cart_id', 'food_id');
    }

    public function addDiscount($foods){
        return $foods->join(DB::raw("
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
