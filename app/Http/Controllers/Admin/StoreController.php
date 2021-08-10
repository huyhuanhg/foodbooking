<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    private $objStore;

    public function __construct()
    {
        $this->objStore = new Store();
    }

    public function index(Request $request){
        $currentPage = $request->page ? (int)$request->page : 1;
        $data['storesPaginate'] = $this->objStore->getStorePaginate($currentPage);
        return view('pages.admins.stores.index', $data);
    }
}
