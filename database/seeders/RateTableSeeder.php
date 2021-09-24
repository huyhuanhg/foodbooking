<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = rand(25, Store::all()->count());
        $storeIds = [];
        for ($i = 0; $i < $count; $i++) {
            $storeId = Store::all()->random()->id;
            while (in_array($storeId, $storeIds)) {
                $storeId = Store::all()->random()->id;
            }
            array_push($storeIds, $storeId);
        }

        foreach ($storeIds as $storeId) {
            $rate = rand(1, 5);
            DB::table('store_rates')->insert(
                [
                    'store_id' => $storeId,
                    'user_id' => 1,
                    'rate' => $rate,
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            );
            $store = Store::find($storeId);
            $store->avg_rate = $rate;
            $store->save();
        }
    }
}
