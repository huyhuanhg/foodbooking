<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promotions = [];

        for ($i = 30; $i > 18; $i--) {
            $food = Food::find($i);
            $promotion = [
                'store_id' => $food->store_id,
                'food_id' => $food->id,
                'is_percent' => 1,
                'discount' => rand(10, 30),
                'max_discount' => rand(10, 50) * 1000,
                'start_time' => '2021-09-04 00:00:00',
                'end_time' => '2021-09-14 00:00:00',
            ];
            array_push($promotions, $promotion);
        }

        DB::table('promotions')->insert($promotions);
    }
}
