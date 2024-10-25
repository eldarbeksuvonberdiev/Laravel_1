<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $models = Order::all();
        return view('orders.orders', ['orders' => $models]);
    }

    public function create()
    {
        $models = Product::all();
        return view('orders.create', ['products' => $models]);
    }

    public function store(OrderStoreRequest $request)
    {
        $model = $request->all();
        Order::create($model);
        return redirect('/orders');
    }

    public function view(Order $id){
        return view('orders.view',['order' => $id]);
    }
   
    public function delete(Order $id){
        $id->delete();
        return redirect('/orders');
    }
}
