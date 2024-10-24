<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $models = Comment::all();
        return view('comments.comments', ['comments' => $models]);
    }

    public function create()
    {
        $model = Post::all();
        return view('comments.create',['posts' => $model]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required|exists:categories,id',
            'body' => 'required'
        ]);
        $model = $request->all();
        Comment::create($model);
        return redirect('/comments')->with([
            'message' => 'Comment is successfully created',
            'status' => 'success'
        ]);
    }

    public function view(int $id){
        $model = Comment::find($id);
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
