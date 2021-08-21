<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
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

    public function index(Request $request)
    {
        $currentPage = $request->page ? (int)$request->page : 1;
        $data['storesPaginate'] = $this->objStore->getStorePaginate($currentPage);
        return view('pages.admins.stores.index', $data);
    }

    public function store(StoreRequest $request)
    {
        $lastPage = $request->page ? (int)$request->page : 1;
        $response = $this->objStore->create($request->all());
        return redirect()->route('stores', ['page' => $lastPage])->with($response['type'], $response['message']);
    }

    public function update(StoreRequest $request, $id)
    {
        $currentPage = $request->page ? (int)$request->page : 1;
        $response = $this->objStore->updateStore($id, $request->all());
        return redirect()->route('stores', ['page' => $currentPage])->with($response['type'], $response['message']);
    }

    public function destroy($id)
    {
        $response = $this->objStore->deleteById($id);
        return redirect()->route('stores')->with($response['type'], $response['message']);
    }
}
