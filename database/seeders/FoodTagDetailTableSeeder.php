<?php

namespace Database\Seeders;

use App\Models\Food;
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
        $foodTagDetail = [];
        $foodCount = Food::all()->count();
        for ($i = 1; $i <= $foodCount; $i++) {
            $tagId1 = rand(1, 12);
            $tagId2 = rand(1, 12);
            while ($tagId1 === $tagId2) {
                $tagId2 = rand(1, 12);
            }
            $tag1 = [
                'tag_id' => $tagId1,
                'food_id' => $i,
            ];
            $tag2 = [
                'tag_id' => $tagId2,
                'food_id' => $i,
            ];
            array_push($foodTagDetail, $tag1);
            array_push($foodTagDetail, $tag2);
        }

        DB::table('food_tag_detail')->insert($foodTagDetail);
    }
}
