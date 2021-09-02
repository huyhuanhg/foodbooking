<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoresCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $foodCategories = [
            [
                'store_cate_name' => "Sang trọng",
                'category_description'=> "Sang trọng",
                'category_active' => 1,
            ],
            [
                'store_cate_name' => "Buffet",
                'category_description'=> "Buffet",
                'category_active' => 1,
            ],
            [
                'store_cate_name' => "Nhà hàng",
                'category_description'=> "Nhà hàng",
                'category_active' => 1,
            ],
            [
                'store_cate_name' => "Ăn vặt/vỉa hè",
                'category_description'=> "Ăn vặt/vỉa hè",
                'category_active' => 1,
            ],
            [
                'store_cate_name' => "Ăn chay",
                'category_description'=> "Ăn chay",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Café/Dessert",
                'category_description'=> "Café/Dessert",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Quán ăn",
                'category_description'=> "Quán ăn",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Bar/Pub",
                'category_description'=> "Bar/Pub",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Quán nhậu",
                'category_description'=> "Quán nhậu",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Beer club",
                'category_description'=> "Beer club",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Tiệm bánh",
                'category_description'=> "Tiệm bánh",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Tiệc tận nơi",
                'category_description'=> "Tiệc tận nơi",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Shop Online",
                'category_description'=> "Shop Online",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Giao cơm văn phòng",
                'category_description'=> "Giao cơm văn phòng",
                'category_active' => 0,
            ],
            [
                'store_cate_name' => "Khu Ẩm Thực",
                'category_description'=> "Khu Ẩm Thực",
                'category_active' => 0,
            ],
        ];

        DB::table('store_categories')->insert($foodCategories);
    }
}
