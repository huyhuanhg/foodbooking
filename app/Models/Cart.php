<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        return $this
            ->belongstoMany(Food::class, 'cart_detail', 'cart_id', 'food_id')
            ->select('foods.*', 'stores.store_name', 'stores.store_not_mark')
            ->join('stores', 'foods.store_id','stores.id')
            ->withPivot('quantity', 'store_id');
    }
}
