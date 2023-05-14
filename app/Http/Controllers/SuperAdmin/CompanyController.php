<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\Role;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    // Handling Companies
    public function indexCompany($slug)
    {
        $companies = Company::with(['users' => function ($query) {
            $query->wherePivot('role_id', 2);
        }])->get();

        return view('dashboard.super-admin.companies', [
            'companies' => $companies,
            'slug' => $slug
        ]);
    }

    public function storeCompany(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
        ]);

        $email = $validatedData['name'] . '@gmail.com';

        $slug = SlugService::createSlug(Company::class, 'slug', $validatedData['name']);

        Company::create([
            'name' => $validatedData['name'],
            'city_id' => 1,
            'email' => $email,
            'slug' => $slug,
        ]);

        return back()->with('success', 'Perusahaan baru telah ditambahkan!');
    }

    public function updateCompany(Request $req, $id)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:255',
        ]);

        $ValidatedData['slug'] = SlugService::createSlug(Company::class, 'slug', $validatedData['name']);

        $company = Company::findOrFail($id);
        $company->update($validatedData);

        return back()->with('success', 'Perusahaan telah diupdate');
    }

    public function destroyCompany($slug, $id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return back()->with('success', 'Company deleted successfully.');
    }
    // End Handling Companies

    // Handling Users
    public function indexUser($slug)
    {
        $users = User::with('companies')->get();
        $roles = Role::all();
        $companies = Company::all();
        return view('dashboard.super-admin.users', [
            'users' => $users,
            'companies' => $companies,
            'roles' => $roles,
            'slug' => $slug,
        ]);
    }

    public function storeUser(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'password' => 'required',
            'company_slug' => 'required',
            'role_id' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create([
            'role_id' => $validatedData['role_id'],
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'password' => $validatedData['password'],
        ]);

        $company = Company::where('slug', $validatedData['company_slug'])->first();
        $company->users()->attach($user);

        return back()->with('success', 'New user added successfully!');
    }

    public function updateUser(Request $req, $slug, $userId)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            // 'email' => [
            //     'required', 'email',
            //     Rule::unique('users')->ignore($userId),
            // ],
            'phone' => 'required',
            'password' => 'required',
            'company_slug' => 'required',
            'role_id' => 'required'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::findOrFail($userId);

        $user->role_id = $validatedData['role_id'];
        $user->name = $validatedData['name'];
        $user->phone = $validatedData['phone'];
        $user->password = $validatedData['password'];
        $user->update();

        $company = Company::where('slug', $validatedData['company_slug'])->first();
        $company->users()->sync($user, false);

        return back()->with('success', 'User Updated successfully!');
    }
    // End Handling Users


}
