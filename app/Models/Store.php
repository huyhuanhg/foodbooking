<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        return Store::join('admins', 'stores.store_owner', '=', 'admins.id')
            ->paginate($limit, ['stores.*', 'admins.first_name', 'admins.last_name'], null, $currentPage);
    }
}
