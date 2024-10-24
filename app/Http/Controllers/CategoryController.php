<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $models = Category::all()->sortByDesc('id');
        return view('categories.category', ['category' => $models]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function view(int $id)
    {
        $model = Category::find($id);
        return view('categories.view',['model'=> $model]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/')->with([
            'message' => 'Category is successfully created',
            'status' => 'success'
        ]);
    }

    public function delete(int $id){
        $model = Category::find($id);
        $model->delete();
        return redirect('/')->with([
            'message' => 'Category is successfully deleted',
            'status' => 'danger'
        ]);
    }
}
