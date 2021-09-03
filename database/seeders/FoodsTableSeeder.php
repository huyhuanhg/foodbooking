<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foods = [
            [
                'store_id' => 1,
                'food_name' => 'Phở đặc biệt',
                'food_active' => 1,
                'price' => 20000,
                'food_description' => 'Phở đặc biệt',
                'food_avatar'=> '/images/uploads/food-avatar/food-1.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 2,
                'food_name' => 'Gà rán',
                'food_active' => 1,
                'price' => 25000,
                'food_description' => 'Đùi gà rán',
                'food_avatar'=> '/images/uploads/food-avatar/food-2.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 3,
                'food_name' => 'Bánh mì',
                'food_active' => 1,
                'price' => 10000,
                'food_description' => 'Bánh mì kẹp',
                'food_avatar'=> '/images/uploads/food-avatar/food-3.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 4,
                'food_name' => 'Cua biển',
                'food_active' => 1,
                'price' => 40000,
                'food_description' => 'Cua biển',
                'food_avatar'=> '/images/uploads/food-avatar/food-4.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 5,
                'food_name' => 'Thịt lợn sạch',
                'food_active' => 1,
                'price' => 70000,
                'food_description' => 'Thịt lợn sạch',
                'food_avatar'=> '/images/uploads/food-avatar/food-5.jpeg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 6,
                'food_name' => 'Trà chanh',
                'food_active' => 1,
                'price' => 30000,
                'food_description' => 'Mát lạnh từ ly trà chanh',
                'food_avatar'=> '/images/uploads/food-avatar/food-6.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 1,
                'food_name' => 'Phở đặc biệt',
                'food_active' => 1,
                'price' => 20000,
                'food_description' => 'Phở đặc biệt',
                'food_avatar'=> '/images/uploads/food-avatar/food-1.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 2,
                'food_name' => 'Gà rán',
                'food_active' => 1,
                'price' => 25000,
                'food_description' => 'Đùi gà rán',
                'food_avatar'=> '/images/uploads/food-avatar/food-2.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 3,
                'food_name' => 'Bánh mì',
                'food_active' => 1,
                'price' => 10000,
                'food_description' => 'Bánh mì kẹp',
                'food_avatar'=> '/images/uploads/food-avatar/food-3.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 4,
                'food_name' => 'Cua biển',
                'food_active' => 1,
                'price' => 40000,
                'food_description' => 'Cua biển',
                'food_avatar'=> '/images/uploads/food-avatar/food-4.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 5,
                'food_name' => 'Thịt lợn sạch',
                'food_active' => 1,
                'price' => 70000,
                'food_description' => 'Thịt lợn sạch',
                'food_avatar'=> '/images/uploads/food-avatar/food-5.jpeg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],
            [
                'store_id' => 6,
                'food_name' => 'Trà chanh',
                'food_active' => 1,
                'price' => 30000,
                'food_description' => 'Mát lạnh từ ly trà chanh',
                'food_avatar'=> '/images/uploads/food-avatar/food-6.jpg',
                'promotion'=> 0,
                'food_profit'=> 0,
                'food_consume'=> 0,
            ],

        ];
        DB::table('foods')->insert($foods);
    }
}
