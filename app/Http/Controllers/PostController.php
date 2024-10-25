<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
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

    public function store(PostStoreRequest $request)
    {
        $model = $request->all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = date("y-m-d_h-i-s_"). time() .'.'. $extension;
            $file->move('images/',$filename);
            $model['image'] = 'images/'.$filename;
        }
        Post::create($model);
        return redirect('/posts')->with([
            'message' => 'Post is successfully created',
            'status' => 'success'
        ]);
    }

    public function view(Post $id){
        return view('posts.view',['post' => $id]);
    }
   
    public function delete(Post $id){
        $id->delete();
        return redirect('/posts')->with([
            'message' => 'Post is successfully deleted',
            'status' => 'danger'
        ]);
    }
}
