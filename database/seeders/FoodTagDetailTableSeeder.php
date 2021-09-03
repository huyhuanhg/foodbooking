<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTagDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodTagDetail = [
            [
                'tag_id' => 8,
                'food_id'=> 1,
            ],
            [
                'tag_id' => 1,
                'food_id'=> 1,
            ],
            [
                'tag_id' => 1,
                'food_id'=> 2,
            ],
            [
                'tag_id' => 10,
                'food_id'=> 2,
            ],
            [
                'tag_id' => 1,
                'food_id'=> 3,
            ],
            [
                'tag_id' => 12,
                'food_id'=> 3,
            ],
            [
                'tag_id' => 1,
                'food_id'=> 4,
            ],
            [
                'tag_id' => 1,
                'food_id'=> 5,
            ],
            [
                'tag_id' => 2,
                'food_id'=> 6,
            ],
            [
                'tag_id' => 12,
                'food_id'=> 6,
            ],
        ];

        DB::table('food_tag_detail')->insert($foodTagDetail);
    }
}
