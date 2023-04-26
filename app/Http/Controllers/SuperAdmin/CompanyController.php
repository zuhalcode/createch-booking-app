<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function indexCompany()
    {
        $companies = Company::all();
        return view('dashboard.companies',[
            'companies' => $companies
        ]);
    }

    public function createCompany(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
        ]);

        $validatedData['user_id'] = 1;
        $validatedData['city_id'] = 1;
        $validatedData['email'] = $req['name'].'@gmail.com';

        Company::create($validatedData);

        return back()->with('success', 'Perusahaan baru telah ditambahkan!');
    }

    public function getCompanyById($id)
    {
        $company = Company::findOrFail($id);
        return response()->json(['company' => $company]);
    }

    public function editCompanyById(Request $req, $id)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:255',
        ]);

        $company = Company::findOrFail($id);
        $company->update($validatedData);

        return back()->with('success', 'Perusahaan telah diupdate');
    }
}