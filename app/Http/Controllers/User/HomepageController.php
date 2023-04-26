<?php

namespace App\Http\Controllers\User;

use App\Models\Cover;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function index() {
        $company = Company::where('user_id', 1)->first();
        $cover = Cover::where('company_id', 1)->first();
        return view('welcome', [
            'company' => $company,
            'cover' => $cover 
        ]);
    }
}
