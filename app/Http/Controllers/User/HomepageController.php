<?php

namespace App\Http\Controllers\User;

use App\Models\Cover;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class HomepageController extends Controller
{
    public function index() {
        $companyId = auth()->user()->company->id;

        if(auth()->check()) $company = Company::where('id', $companyId)->first();
        else $company = Company::findOrFail(1);

        $products = Product::where('company_id', $companyId)->get();
        $cover = Cover::where('company_id', $company->id)->first();
        return view('welcome', [
            'company' => $company,
            'cover' => $cover,
            'products' => $products
        ]);
    }
}
