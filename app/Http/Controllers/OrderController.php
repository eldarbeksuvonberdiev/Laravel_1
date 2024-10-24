<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);
        $model = $request->all();
        Order::create($model);
        return redirect('/orders');
    }

    public function view(int $id){
        $model = Order::find($id);
        return view('orders.view',['order' => $model]);
    }
   
    public function delete(int $id){
        $model = Order::find($id);
        $model->delete();
        return redirect('/orders');
    }
}
