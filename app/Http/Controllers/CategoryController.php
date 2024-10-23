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
        return view('tables.category', ['category' => $models]);
    }

    public function create()
    {
        return view('tables.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/')->with('success','Category is successfully created');
    }
}
~