<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyStoreRequest;
use App\Models\Company;
use App\Models\Users;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    
    public function index(Users $id){
        $company = Company::where('user_id',$id->id)->paginate(10);
        return view('company.index',['user' => $id,'companies' => $company]);
    }

    public function store(CompanyStoreRequest $request){
        Company::create($request->all());
        return redirect('/company/'.$request->user_id);
    }

    public function delete(Company $id){
        $user = Users::find($id->user_id);
        $id->delete();
        $company = Company::all();
        return view('company.index',['user' => $user,'companies' => $company]);
    }

    public function search(Request $request,Users $id){
        $company = Company::where('user_id',$id->id)->where('name','like','%'.$request->search.'%')->paginate(10);
        return view('company.index',['user' => $id,'companies' => $company]);
    }
}
