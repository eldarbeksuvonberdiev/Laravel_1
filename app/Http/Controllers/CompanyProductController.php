<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyProductStoreRequest;
use App\Models\Company;
use App\Models\CompanyProduct;
use Illuminate\Http\Request;

class CompanyProductController extends Controller
{
    
    public function index(Company $id){
        $products = CompanyProduct::all();
        return view('companyproducts.index',['products' => $products,'company' => $id]);
    }

    public function store(CompanyProductStoreRequest $request,Company $id){
        CompanyProduct::create($request->all());
        $products = CompanyProduct::all();
        return view('companyproducts.index',['products' => $products,'company' => $id]);
    }

    public function delete(CompanyProduct $id)
    {
        $company = Company::find($id->company_id);
        $id->delete();
        $products = CompanyProduct::all();
        return view('companyproducts.index',['products' => $products,'company' => $company]);
    }
}
