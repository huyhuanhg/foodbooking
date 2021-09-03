<?php

namespace Database\Seeders;

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
        $promotions = [
            [
                'store_id' => 12,
                'food_id' => 12,
                'is_percent' => 1,
                'discount' => 15,
                'max_discount' => 10000,
                'start_time' => '2021-09-04 00:00:00',
                'end_time' => '2021-09-14 00:00:00',
            ],
            [
                'store_id' => 11,
                'food_id' => 11,
                'is_percent' => 1,
                'discount' => 10,
                'max_discount' => 20000,
                'start_time' => '2021-09-09 00:00:00',
                'end_time' => '2021-09-19 00:00:00',
            ],
            [
                'store_id' => 10,
                'food_id' => 10,
                'is_percent' => 1,
                'discount' => 20,
                'max_discount' => 30000,
                'start_time' => '2021-09-08 00:00:00',
                'end_time' => '2021-09-18 00:00:00',
            ],
            [
                'store_id' => 9,
                'food_id' => 9,
                'is_percent' => 1,
                'discount' => 10,
                'max_discount' => 40000,
                'start_time' => '2021-09-07 00:00:00',
                'end_time' => '2021-09-17 00:00:00',
            ],
            [
                'store_id' => 8,
                'food_id' => 8,
                'is_percent' => 1,
                'discount' => 15,
                'max_discount' => 50000,
                'start_time' => '2021-09-06 00:00:00',
                'end_time' => '2021-09-16 00:00:00',
            ],
            [
                'store_id' => 7,
                'food_id' => 7,
                'is_percent' => 1,
                'discount' => 20,
                'max_discount' => 60000,
                'start_time' => '2021-09-05 00:00:00',
                'end_time' => '2021-09-15 00:00:00',
            ],
        ];

        DB::table('promotions')->insert($promotions);
    }
}
