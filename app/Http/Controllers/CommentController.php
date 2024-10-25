<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentStoreRequest;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $models = Comment::all()->sortByDesc('id');
        return view('comments.comments', ['comments' => $models]);
    }

    public function create()
    {
        $model = Post::all();
        return view('comments.create',['posts' => $model]);
    }

    public function store(CommentStoreRequest $request)
    {
        $model = $request->all();
        Comment::create($model);
        return redirect('/comments')->with([
            'message' => 'Comment is successfully created',
            'status' => 'success'
        ]);
    }

    public function view(Comment $id){
        return view('comments.view',['comment' => $id]);
    }
   
    public function delete(Comment $id){
        $id->delete();
        return redirect('/comments')->with([
            'message' => 'Comment is successfully deleted',
            'status' => 'danger'
        ]);
    }
}
