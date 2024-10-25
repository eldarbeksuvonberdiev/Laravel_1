<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
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

    public function store(ProductStoreRequest $request)
    {
        $model = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date("y-m-d_h-i-s_") . time() . '.' . $extension;
            $file->move('images/', $filename);
            $model['image'] = 'images/' . $filename;
        }
        Product::create($model);
        return redirect('/products')->with('success', 'Product is successfully created');
    }

    public function view(int $id)
    {
        $model = Product::find($id);
        return view('/products.view', ['model' => $model]);
    }

    public function delete(int $id)
    {
        $model = Product::find($id);
        $model->delete();
        return redirect('/products')->with('success', 'Product is successfully created');
    }
}
