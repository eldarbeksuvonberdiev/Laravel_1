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
            'image' => 'required|file|mimes:png,jpg,jpeg',
            'likes' => 'required',
            'dislikes' => 'required',
        ],[
            'category_id.required' => "Turni tanlang!",
            'category_id.exists' => "Id topilmadi",
            'title.required' => "Ma'lumot to'ldirilmagan!",
            'body.required' => "Ma'lumot to'ldirilmagan!",
            'image.required' => "Rasm tanlanmagan!",
            'image.mimes' => "Rasm formati noto'g'ri!",
            'likes.required' => "Soni kiritilmadi!",
            'dislikes.required' => "Soni kiritilmadi!"
        ]);

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
        // $model = Post::find($id);
        return view('posts.view',['post' => $id]);
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
