<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function index()
    {
        $models = Like::all();
        return view('likes.likes', ['likes' => $models]);
    }
    
    public function create()
    {
        $posts = Post::all();
        return view('likes.create',['posts' => $posts]);
    }

    public function view(int $id)
    {
        $model = Like::find($id);
        return view('likes.view',['model'=> $model]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'user_id' => 'required|exists:posts,id',
            'is_active' => 'required',
        ]);


        $like = $request->all();
        Like::create($like);
        return redirect('/likes')->with([
            'message' => 'Like is successfully created',
            'status' => 'success'
        ]);
    }

    public function delete(int $id){
        $model = Like::find($id);
        $model->delete();
        return redirect('/likes')->with([
            'message' => 'Like is successfully deleted',
            'status' => 'danger'
        ]);
    }
}
