<?php

namespace App\Http\Controllers\User;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function indexById()
    {
        $company = Company::where('user_id', 1)->first();
        return view('product-detail', ['company' => $company]);
    }
}
