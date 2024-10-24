<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $models = Post::all();
        return view('posts.posts', ['posts' => $models]);
    }
    public function create()
    {
        $models = Category::all();
        return view('posts.create', ['categories' => $models]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|max:255',
            'body' => 'required',
            'likes' => 'required',
            'dislikes' => 'required',
        ]);
        $model = $request->all();
        Post::create($model);
        return redirect('/posts')->with([
            'message' => 'Post is successfully created',
            'status' => 'success'
        ]);
    }

    public function view(int $id){
        $model = Post::find($id);
        return view('posts.view',['post' => $model]);
    }
   
    public function delete(int $id){
        $model = Post::find($id);
        $model->delete();
        return redirect('/posts')->with([
            'message' => 'Post is successfully deleted',
            'status' => 'danger'
        ]);
    }
}
