<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = rand(50, floor(Food::all()->count() / 10));
        $foods = [];
        for ($i = 0; $i < $count; $i++) {
            $food = Food::all()->random();
            while (true) {
                $exist = array_filter($foods, function ($f) use ($food) {
                    return $f->id == $food->id;
                });
                if (empty($exist)) {
                    break;
                }
                $food = Food::all()->random();
            }
            array_push($foods, $food);
        }

        foreach ($foods as $food) {
            DB::table('likes')->insert(
                [
                    'store_id' => $food->store_id,
                    'user_id' => 1,
                    'food_id' => $food->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
        }
    }
}
