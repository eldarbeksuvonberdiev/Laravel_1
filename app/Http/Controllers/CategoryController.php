<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
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

    public function store(CategoryStoreRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/')->with([
            'message' => 'Category is successfully created',
            'status' => 'success'
        ]);
    }

    public function delete(Category $id){
        $id->delete();
        return redirect('/')->with([
            'message' => 'Category is successfully deleted',
            'status' => 'danger'
        ]);
    }
}
