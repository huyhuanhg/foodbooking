<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodPromotions = Food::select('id', 'store_id', 'price')->where('promotion', 1)->get();
        foreach ($foodPromotions as $food) {
            $price = $food->price / 1000;
            $isPercent = rand(0, 1);
            $discount = $isPercent === 1 ? (rand(1, 10) * 5) : (rand(1, floor($price / 2)) * 1000);
            $maxDiscount = $isPercent === 1 ? rand(floor($price / 5), floor($price / 2)) * 1000 : null;
            $promotion = new Promotion();
            $promotion->store_id = $food->store_id;
            $promotion->food_id = $food->id;
            $promotion->is_percent = $isPercent;
            $promotion->discount = $discount;
            if (isset($maxDiscount)) {
                $promotion->max_discount = $maxDiscount;
            }
            $promotion->start_time = now();
            $promotion->save();

            if ($isPercent !== 0) {
                $newPrice = $discount * $food->price / 100;
                if ($newPrice <= $maxDiscount) {
                    $discount = $food->price - $newPrice;
                } else {
                    $discount = $food->price - $maxDiscount;
                }
            } else {
                $discount = $food->price - $discount;
            }
            $f = Food::find($food->id);
            $f->discount = $discount;
            $f->save();
        }
    }
}
