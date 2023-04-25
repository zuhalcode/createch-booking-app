<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function indexById()
    {
        $company = Company::where('user_id', 1)->first();
        return view('product-detail', ['company' => $company]);
    }
}
