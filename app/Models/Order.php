<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'id';

    protected $fillable = [
        'customer_id',
        'order_name',
        'order_phone',
        'order_address',
        'order_note',
        'order_status'
    ];

    public function orderDetail()
    {
        return $this
            ->belongstoMany(Food::class, 'order_detail', 'order_id', 'food_id');
    }

    public function getOrderPaginate($currentPage = 1, $limit = 10)
    {
        $orders = Order::join('users', 'orders.customer_id', 'users.id')
            ->join('order_detail', 'orders.id', 'order_detail.order_id')
            ->groupBy('orders.id')->orderBy('orders.created_at', 'DESC')->
            paginate(
                $limit,
                [
                    'orders.*',
                    'users.first_name',
                    'users.last_name',
                    'users.avatar',
                    'users.gender',
                    DB::raw('SUM(order_detail.uni_price * order_detail.quantity - order_detail.discount) AS total_price')
                ],
                'Quản lý đơn hàng',
                $currentPage
            );

        $order_id = [];
        foreach ($orders as $order) {
            array_push($order_id, $order['id']);
        }

        $orderDetails = Order::select(
            'order_detail.order_id',
            'order_detail.uni_price',
            'order_detail.quantity',
            'order_detail.discount',
            'foods.food_name',
            'foods.food_avatar'
        )
            ->join('order_detail', 'orders.id', 'order_detail.order_id')
            ->whereIn('order_detail.order_id', $order_id)->
            join('foods', 'order_detail.food_id', 'foods.id')->get();

        foreach ($orders as $orderKey => $order) {
            $orders[$orderKey]->setAttribute('order_detail', collect([]));
            foreach ($orderDetails as $orderDetail) {
                if ($order['id'] === $orderDetail['order_id']) {
                    $orders[$orderKey]->order_detail->push($orderDetail);
                }
            }
        }
        return $orders;
    }

    public function updateOrder($id, $dataUpdate)
    {
        try {
            $order = Order::find($id);
            $order->order_phone = $dataUpdate['order_number_phone'];
            $order->order_address = $dataUpdate['order_address'];
            $order->order_note = $dataUpdate['order_note'] ?? '';
            $order->order_status = (int)$dataUpdate['order_status'];
            $order->save();
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.order_message.EDIT_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.order_message.EDIT_FAILURE'),
            ];
        }
    }

    public function deleteById($id)
    {
        try {
            Order::destroy($id);
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.order_message.DELETE_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.order_message.DELETE_FAILURE'),
            ];
        }
    }

    public function toggleState($id)
    {
        try {
            $order = Order::find($id);
            $order->order_status = $order->order_status === 1 ? 0 : 1;
            $order->save();
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.order_message.TOGGLE_STATUS_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.order_message.TOGGLE_STATUS_FAILURE'),
            ];
        }
    }

    public function totalOrders()
    {
        return Order::select(DB::raw('COUNT(id) AS total'))->first();
    }
}
