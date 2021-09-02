<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTabDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodTabDetail = [
            [
                'tab_id' => 8,
                'food_id'=> 1,
            ],
            [
                'tab_id' => 1,
                'food_id'=> 1,
            ],
            [
                'tab_id' => 1,
                'food_id'=> 2,
            ],
            [
                'tab_id' => 10,
                'food_id'=> 2,
            ],
            [
                'tab_id' => 1,
                'food_id'=> 3,
            ],
            [
                'tab_id' => 12,
                'food_id'=> 3,
            ],
            [
                'tab_id' => 1,
                'food_id'=> 4,
            ],
            [
                'tab_id' => 1,
                'food_id'=> 5,
            ],
            [
                'tab_id' => 2,
                'food_id'=> 6,
            ],
            [
                'tab_id' => 12,
                'food_id'=> 6,
            ],
        ];

        DB::table('food_tab_detail')->insert($foodTabDetail);
    }
}
