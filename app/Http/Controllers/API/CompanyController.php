<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function getCompanyById($id)
    {
        $company = Company::findOrFail($id);
        return response()->json(['company' => $company]);
    }

    public function getUserByUserId($userId)
    {
        $user = User::findOrFail($userId);
        return response()->json(['user' => $user]);
    }
}
