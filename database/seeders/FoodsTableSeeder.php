<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Store;
use Illuminate\Database\Seeder;

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
                'food_name' => 'Bánh sinh nhật',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/banh-kem-1.jpg',
            ],
            [
                'food_name' => 'Bánh ngọt',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/banh-kem-ut-mo-to.jpg',
            ],
            [
                'food_name' => 'Bánh mì Quốc dân',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/banh-mi-quoc-dan.jpg',
            ],
            [
                'food_name' => 'Bánh mì trứng',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/banh-mi-trung.jpg',
            ],
            [
                'food_name' => 'Bánh tráng kẹp Combo',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/banh-trang-kep-combo.jpg',
            ],
            [
                'food_name' => 'Bánh tráng trộn',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/banh-trang-tron.jpg',
            ],
            [
                'food_name' => 'Bánh bông lan',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/bong-lan.jpg',
            ],
            [
                'food_name' => 'Cake nõn nà',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/cake-1.jpg',
            ],
            [
                'food_name' => 'Cake Tình yêu',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/cake-2.jpg',
            ],
            [
                'food_name' => 'Cháo bồ câu',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/chao-bo-cau.jpg',
            ],
            [
                'food_name' => 'Cơm sườn bình dân',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/com-suon.jpg',
            ],
            [
                'food_name' => 'Cơm tấm',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/com-tam-suon.jpg',
            ],
            [
                'food_name' => 'Cơm trứng',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/com-trung.jpg',
            ],
            [
                'food_name' => 'Cua biển',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/cua.jpg',
            ],
            [
                'food_name' => 'Gà nướng nguyên con',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/ga-nuong.jpg',
            ],
            [
                'food_name' => 'Đùi gà chiên giòn',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/ga-ran.jpg',
            ],
            [
                'food_name' => 'Hàu tái',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/hau-tai.jpg',
            ],
            [
                'food_name' => 'Lẩu thái',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/lau.jpg',
            ],
            [
                'food_name' => 'Mì chả',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/mi-quang.jpg',
            ],
            [
                'food_name' => 'Mì quảng',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/mi-quang-2.jpg',
            ],
            [
                'food_name' => 'Trà sữa Mil VN',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/milvn.jpg',
            ],
            [
                'food_name' => 'Nước ép chanh',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/nuoc-chanh.jpg',
            ],
            [
                'food_name' => 'Nước rau má',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/nuoc-rau-ma.jpg',
            ],
            [
                'food_name' => 'Phở',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/pho.jpg',
            ],
            [
                'food_name' => 'Pizza nguyệt quế',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/pizza-1.jpg',
            ],
            [
                'food_name' => 'Pizza rồng thiêng',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/pizza-2.jpg',
            ],
            [
                'food_name' => 'Sinh tố bơ',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/sinh-to.jpg',
            ],
            [
                'food_name' => 'Combo thịt heo kháng CoV',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/thit-heo.jpeg',
            ],
            [
                'food_name' => 'Trà tắc King',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/tra-sua-king.jpg',
            ],
            [
                'food_name' => 'Hột vịt lộn',
                'food_description' => 'Món ăn tâm huyết của chúng tôi',
                'food_image' => '/images/uploads/food-images/trung-lon.jpg',
            ],

        ];
        $storeCount = Store::all()->count();
        for ($i = 1; $i <= $storeCount; $i++) {
            foreach ($foods as $food) {
                $price = rand(10, 500) * 1000;
                $newFood = new Food();
                $newFood->store_id = $i;
                $newFood->price = $price;
                $newFood->discount = $price;
                $newFood->food_not_mark = vi_not_mark($food['food_name']);
                $newFood->promotion = rand(0, 1);
                foreach ($food as $key => $value) {
                    if ($key == 'food_name') {
                        $newFood->$key = $value . " - $i";
                    } else {
                        $newFood->$key = $value;
                    }
                }
                $newFood->save();
            }
        }
    }
}
