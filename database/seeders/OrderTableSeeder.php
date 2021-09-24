<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notes = [
            'Giao trước 11h trưa',
            'Giao trước 4h chiều',
            'Giao sau 6h tối',
            'Hãy giao buổi chiều',
            'Hãy giao buổi tối',
            'Hãy giao buổi sáng',
            'Đang cần rất gấp',
            'Đói bụng lắm rồi',
            '',
        ];
        $count = rand(20, 30);
        $user = User::find(1);
        for ($i = 0; $i < $count; $i++) {
            $status = rand(0, 4);
            $order = new Order();
            $order->customer_id = $user->id;
            $order->order_name = "$user->first_name $user->last_name";
            $order->order_phone = $user->phone;
            $order->order_address = "Thôn Đông - $user->address";
            $order->order_note = $notes[rand(0, count($notes) - 1)];
            $order->order_status = $status;
            $order->save();

            $foods = [];
            $foodCount = rand(1, 5);
            for ($j = 0; $j < $foodCount; $j++) {
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
                $quantity = rand(1, 5);
                DB::table('order_detail')->insert([
                    'order_id' => $order->id,
                    'food_id' => $food->id,
                    'store_id' => $food->store_id,
                    'uni_price' => $food->price,
                    'quantity' => $quantity,
                    'discount' => $food->discount,
                ]);
                if ($status === 4) {
                    $food->food_consume += $quantity;
                    $food->food_profit += $food->discount * $quantity;
                    $food->save();
                }
            }
        }
    }
}
