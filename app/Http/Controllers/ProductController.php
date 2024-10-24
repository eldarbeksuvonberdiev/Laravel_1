<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $models = Product::all();
        return view('products.index', ['products' => $models]);
    }

    public function create()
    {
        $models = Category::all();
        return view('products.create', ['categories' => $models]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category_id' => 'required|exists:categories,id'
        ]);
        $model = $request->all();
        Product::create($model);
        return redirect('/products')->with('success','Product is successfully created');
    }

    public function view(int $id){
        $model = Product::find($id);
        return view('/products.view',['model'=>$model]);
    }

    public function delete( int $id){
        $model = Product::find($id);
        $model->delete();
        return redirect('/products')->with('success','Product is successfully created');
    }
}
