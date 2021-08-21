<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $objOrder;

    public function __construct()
    {
        $this->objOrder = new Order();
    }

    public function index(Request $request)
    {
        $currentPage = $request->page ? (int)$request->page : 1;
        $data['orders'] = $this->objOrder->getOrderPaginate($currentPage);
        return view('pages.admins.orders.index', $data);
    }

    public function store()
    {

    }

    public function update(OrderRequest $request, $id)
    {
        $response = $this->objOrder->updateOrder($id, $request->all());
        return redirect()->route('orders')->with($response['type'], $response['message']);
    }

    public function destroy($id)
    {
        $response = $this->objOrder->deleteById($id);
        return redirect()->route('orders')->with($response['type'], $response['message']);
    }

    public function toggleState(Request $request, $id)
    {
        $response = $this->objOrder->toggleState($id);
        return redirect()->route('orders')->with($response['type'], $response['message']);
    }
}
