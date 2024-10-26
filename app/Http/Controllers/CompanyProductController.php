<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyProductStoreRequest;
use App\Http\Requests\CompanyProductUpdateRequest;
use App\Models\Company;
use App\Models\CompanyProduct;
use Illuminate\Http\Request;

class CompanyProductController extends Controller
{
    
    public function index(Company $id){
        $products = CompanyProduct::where('company_id',$id->id)->orderBy('id','desc')->paginate(10);
        return view('companyproducts.index',['products' => $products,'company' => $id]);
    }

    public function store(CompanyProductStoreRequest $request){
        $id = $request->all()['company_id'];
        CompanyProduct::create($request->all());
        return redirect('/companyproducts/'.$id);
    }

    public function update(CompanyProductUpdateRequest $request, CompanyProduct $id){
        $company_id = $request->all()['company_id'];
        $id->update($request->all());
        return redirect('/companyproducts/'.$company_id);
    }

    public function delete(CompanyProduct $id)
    {
        $company = Company::find($id->company_id);
        $id->delete();
        $products = CompanyProduct::all();
        return redirect('/companyproducts/'.$company->id);
    }

    public function search(Request $request, Company $id)
    {
        $products = CompanyProduct::where('company_id',$id->id)->where('name','like','%'.$request->search.'%')->paginate(10);
        return view('companyproducts.index',['products' => $products,'company' => $id]);
    }
}
