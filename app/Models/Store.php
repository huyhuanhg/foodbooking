<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class Store extends Model
{
    use HasFactory;

    protected $table = 'stores';

    protected $primaryKey = 'id';

    protected $fillable = [
        'store_name',
        'store_address',
        'phone_contact',
        'store_owner',
        'avg_rate',
        'store_description',
        'store_status'
    ];

    public function getStorePaginate($currentPage = 1, $limit = 10)
    {
        return Store::join('admins', 'stores.store_owner', '=', 'admins.id')->orderBy('stores.id')
            ->paginate($limit, ['stores.*', 'admins.first_name', 'admins.last_name'], null, $currentPage);
    }

    public function create($storeData)
    {
        try {
            $store = new Store();
            $store->store_name = $storeData['store_name'];
            $store->store_address = $storeData['store_address'];
            $store->phone_contact = $storeData['phone_contact'];
            $store->store_description = $storeData['store_description'];
            $store->store_owner = Auth::guard('admin')->user()->id;
            $store->store_status = (int)$storeData['store_status'];
            $store->save();
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.store_message.ADD_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.store_message.ADD_FAILURE')
            ];
        }
    }

    public function updateStore($id, $dataUpdate)
    {
        try {
            $store = Store::find($id);
            $store->store_name = $dataUpdate['store_name'];
            $store->store_address = $dataUpdate['store_address'];
            $store->phone_contact = $dataUpdate['phone_contact'];
            $store->store_description = $dataUpdate['store_description'];
            $store->store_status = (int)$dataUpdate['store_status'];
            $store->save();
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.store_message.EDIT_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.store_message.EDIT_FAILURE'),
            ];
        }
    }

    public function deleteById($id)
    {
        try {
            Store::destroy($id);
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_SUCCESS'),
                'message' => Config::get('constants.store_message.DELETE_SUCCESS')
            ];
        } catch (\Exception $e) {
            return [
                'type' => Config::get('constants.NOTIFICATION_TYPE_FAILURE'),
                'message' => Config::get('constants.store_message.DELETE_FAILURE'),
            ];
        }
    }
}
