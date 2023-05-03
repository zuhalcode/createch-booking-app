<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CompanyController extends Controller
{
    public function indexCompany()
    {
        $companies = Company::all();
        return view('dashboard.super-admin.companies',[
            'companies' => $companies
        ]);
    }

    public function indexAdmin()
    {
        $users = User::where('role_id', 2)->get();
        return view('dashboard.super-admin.administrators',[
            'users' => $users
        ]);
    }

    public function storeAdmin(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => $validatedData['password'],
            'role_id' => 2,
        ]);
    }

    public function createCompany(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
        ]);

        $email = $validatedData['name'] . '@gmail.com';

        $slug = SlugService::createSlug(Company::class, 'slug', $validatedData['name']);

        Company::create([
            'user_id' => auth()->user()->id,
            'city_id' => 1,
            'email' => $email,
            'slug' => $slug,
        ]);

        return back()->with('success', 'Perusahaan baru telah ditambahkan!');
    }

    public function createSlug(Request $req)
    {
        $slug = SlugService::createSlug(Company::class, 'slug', $req->name);
        return response()->json(['slug' => $slug]);
    }

    public function getCompanyById($id)
    {
        $company = Company::findOrFail($id);
        return response()->json(['company' => $company]);
    }

    public function updateCompany(Request $req, $id)
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

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return back()->with('success', 'Company deleted successfully.');
    }
}