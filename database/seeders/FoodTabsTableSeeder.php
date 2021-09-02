<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTabsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodTabs = [
            [
                'tab_name' => "Đồ ăn",
                'tab_description'=> "Đồ ăn",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Đồ uống",
                'tab_description'=> "Đồ uống",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Đồ chay",
                'tab_description'=> "Đồ chay",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Bánh kem",
                'tab_description'=> "Bánh kem",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Tráng miệng",
                'tab_description'=> "Tráng miệng",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Sushi",
                'tab_description'=> "Sushi",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Món lẩu",
                'tab_description'=> "Món lẩu",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Mì phở",
                'tab_description'=> "Mì phở",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Cơm hộp",
                'tab_description'=> "Cơm hộp",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Món gà",
                'tab_description'=> "Món gà",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Pizza/Burger",
                'tab_description'=> "Pizza/Burger",
                'tab_active' => 1,
            ],
            [
                'tab_name' => "Homemade",
                'tab_description'=> "Homemade",
                'tab_active' => 1,
            ],
        ];

        DB::table('food_tabs')->insert($foodTabs);
    }
}
