<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersStoreRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index(){
        $model = Users::orderBy('id','desc')->paginate(10);
        return view('users.index',['users' => $model]);
    }

    public function create()
    {
        $models = Users::all();
        return view('users.create', ['categories' => $models]);
    }

    public function store(UsersStoreRequest $request)
    {
        $model = $request->all();
        Users::create($model);
        return redirect('/users')->with('success', 'Product is successfully created');
    }

    public function view(int $id)
    {
        $model = Users::find($id);
        return view('/users.view', ['model' => $model]);
    }

    public function delete(Users $id)
    {
        $id->delete();
        return redirect('/users')->with('success', 'User is successfully created');
    }

    public function search(Request $request){
        $model = Users::where('name','like','%'.$request->search.'%')->paginate(10);
        return view('users.index',['users' => $model]);
    }
}
