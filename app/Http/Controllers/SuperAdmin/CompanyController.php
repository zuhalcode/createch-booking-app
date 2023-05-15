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
        $companies = Company::with('users')->get();
        $admins = User::where('role_id', 2)->get();
        return view('dashboard.super-admin.companies', [
            'companies' => $companies,
            'admins' => $admins,
            'slug' => $slug
        ]);
    }

    public function storeCompany(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'user_id' => 'required',
        ]);

        $email = $validatedData['name'] . '@gmail.com';
        $user = User::findOrFail($validatedData['user_id']);

        $slug = SlugService::createSlug(Company::class, 'slug', $validatedData['name']);

        $company = Company::create([
            'name' => $validatedData['name'],
            'city_id' => 1,
            'email' => $email,
            'slug' => $slug,
        ]);

        $company->users()->attach($user);
        return back()->with('success', 'Perusahaan baru telah ditambahkan!');
    }

    public function updateCompany(Request $req, $slug, $id)
    {
        $validatedData = $req->validate([
            'name' => 'nullable|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|max:255',
            'user_id' => 'required|max:255',
        ]);

        $ValidatedData['slug'] = SlugService::createSlug(Company::class, 'slug', $validatedData['name']);

        $company = Company::findOrFail($id);
        $company->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
        ]);

        $user = User::findOrFail($validatedData['user_id']);
        $company->users()->sync($user, false);

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
            'email' => 'nullable|email|unique:users,email,' . $userId,
            'phone' => 'required',
            'password' => 'required',
            'company_slug' => 'required',
            'role_id' => 'required',
        ]);

        $user = User::findOrFail($userId);

        // Only update the email field if it has changed
        if ($user->email !== $validatedData['email']) $user->email = $req->input('email');

        $user->role_id = $validatedData['role_id'];
        $user->name = $validatedData['name'];
        $user->phone = $validatedData['phone'];
        $user->password = Hash::make($validatedData['password']);
        $user->update();

        // get the company from request
        $company = Company::where('slug', $validatedData['company_slug'])->first();

        // Check if the pivot values are different
        if ($company->users()->where('user_id', $user->id)->exists()) {
            // Pivot values are the same, no need to update
            return back()->with('success', 'User Updated successfully!');
        }

        // get current company from user which edit now
        $currentUserCompany = $user->companies()->first();
        $currentUserCompany->users()->detach($user);

        // update use the requested company
        $company->users()->attach($user);

        return back()->with('success', 'User Updated successfully!');
    }
    // End Handling Users


}
