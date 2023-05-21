<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\User;
use App\Models\Cover;
use App\Models\Order;
use App\Models\Branch;
use App\Models\Company;
use App\Models\Province;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CompanyController extends Controller
{
    // Handling Dashboard
    public function indexDashboard($slug)
    {
        return view('dashboard.index', ['slug' => $slug]);
    }
    // End Handling Dashboard

    // Handling Landing Page
    public function editLandingPage($slug)
    {
        $company = Company::where('slug', $slug)->first();
        $cover = Cover::where('company_id', $company->id)->first();
        return view('dashboard.company.landing-page', ['cover' => $cover, 'slug' => $slug]);
    }

    public function updateLandingPage(Request $req, $slug)
    {
        $company = Company::where('slug', $slug)->first();
        $cover = Cover::where('company_id', $company->id)->first();

        $validatedData = $req->validate([
            'first_heading_text' => 'required|max:255',
            'second_heading_text' => 'required|max:255',
            'short_desc' => 'required',
        ]);

        if ($req->hasFile('image')) {
            // Delete Old file
            $oldFile = public_path($cover->image);
            if (file_exists($oldFile)) unlink($oldFile);

            $image = $req->file('image');
            $filename = 'cover-' . $cover->id . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('covers', $filename);
            $cover->image = "/storage/covers/$filename";
        }

        $cover->first_heading_text = $validatedData['first_heading_text'];
        $cover->second_heading_text = $validatedData['second_heading_text'];
        $cover->short_desc = $validatedData['short_desc'];
        $cover->update();

        return back()->with('success', 'Landing Page updated successfully!');
    }
    // End Handling Landing Page

    // Handling Company
    public function editCompany($slug)
    {
        $company = Company::where('slug', $slug)->first();
        return view('dashboard.company.index', ['company' => $company, 'slug' => $slug]);
    }

    public function updateCompany(Request $req, $slug)
    {
        $company = Company::where('slug', $slug)->first();

        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'about_us' => 'required',
            'logo' => 'mimes:jpg,png,jpeg|image'
        ]);

        if ($req->hasFile('logo')) {
            // Delete Old file
            $oldFile = public_path($company->logo);
            if (file_exists($oldFile)) unlink($oldFile);

            $logo = $req->file('logo');
            $filename = 'logo-' . $company->id . '-' . time() . '.' . $logo->getClientOriginalExtension();
            $logo->storeAs('logos', $filename);
            $company->logo = "/storage/logos/$filename";
        }

        $company->name = $validatedData['name'];
        $company->email = $validatedData['email'];
        $company->phone = $validatedData['phone'];
        $company->address = $validatedData['address'];
        $company->about_us = $validatedData['about_us'];

        $company->save();

        return back()->with('success', 'Landing Page updated successfully!');
    }
    // End Handling Company

    // Handling Branch
    public function indexBranch($slug)
    {
        $company = Company::where('slug', $slug)->first();

        return view('dashboard.company.branches.index', [
            'slug' => $slug,
            'branches' => $company->branches
        ]);
    }

    public function showBranchProducts($slug, $branchId)
    {
        $branch = Branch::findOrFail($branchId);
        $company = Company::where('slug', $slug)->first();

        return view('dashboard.company.branches.detail', [
            'slug' => $slug,
            'branch' => $branch,
            'branchProducts' => $branch->products,
            'companyProducts' => $company->products,
        ]);
    }

    public function createBranch($slug)
    {
        $provinces = Province::all();
        $cities = City::all();
        $company = Company::where('slug', $slug)->first();
        $admins = $company->users()->where('role_id', 3)->get();

        return view('dashboard.company.branches.create', [
            'slug' => $slug,
            'provinces' => $provinces,
            'cities' => $cities,
            'admins' => $admins,
        ]);
    }

    public function storeBranch(Request $req, $slug)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required|not_in:Choose...',
            'admin' => 'required|not_in:Choose...',
            'socmed.instagram' => 'nullable',
            'socmed.twitter' => 'nullable',
            'socmed.tiktok' => 'nullable',
            'socmed.facebook' => 'nullable',
        ]);

        $company = Company::where('slug', $slug)->first();
        $validatedData['slug'] = SlugService::createSlug(Branch::class, 'slug', $validatedData['name']);

        $branch = Branch::create([
            'company_id' => $company->id,
            'city_id' => $validatedData['city'],
            'slug' => $validatedData['slug'],
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
        ]);

        $branch->users()->attach($validatedData['admin']);

        foreach ($validatedData['socmed'] as $platform => $username) {
            if (!is_null($username) && in_array($platform, ['instagram', 'twitter', 'tiktok', 'facebook'])) {
                SocialMedia::create([
                    'branch_id' => $branch->id,
                    'name' => $platform,
                    'username' => $username,
                ]);
            }
        }

        return redirect("/$slug/dashboard/branches")->with('success', 'Branch added successfully!');
    }

    public function editBranch($slug, $branchId)
    {
        $provinces = Province::all();
        $cities = City::all();
        $branch = Branch::findOrFail($branchId);
        $company = Company::where('slug', $slug)->first();
        $admins = $company->users()->where('role_id', 3)->get();

        return view('dashboard.company.branches.edit', [
            'slug' => $slug,
            'branch' => $branch,
            'provinces' => $provinces,
            'cities' => $cities,
            'admins' => $admins
        ]);
    }

    public function updateBranch(Request $req, $slug, $branchId)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'admin' => 'nullable',
            'address' => 'required',
            'city' => 'required',
            'socmed.*' => 'nullable',
        ]);

        $branch = Branch::findOrFail($branchId);
        $branch->update([
            'city' => $validatedData['city'],
            'name' => $validatedData['name'],
            'phone' => $validatedData['phone'],
            'address' => $validatedData['address'],
        ]);

        $socialMediaData = $validatedData['socmed'];
        foreach (['instagram', 'twitter', 'facebook', 'tiktok'] as $platform) {
            $socialMedia = $branch->social_medias->where('name', $platform)->first();

            if (isset($socialMediaData[$platform])) {
                $username = $socialMediaData[$platform];

                if ($username !== '' && $socialMedia) {
                    $socialMedia->update([
                        'branch_id' => $branch->id,
                        'username' => $username,
                    ]);
                } elseif ($username !== '') {
                    $branch->social_medias()->create([
                        'branch_id' => $branch->id,
                        'name' => $platform,
                        'username' => $username,
                    ]);
                }
            } elseif ($socialMedia) {
                $socialMedia->delete();
            }
        }

        // Update pivot table branch_user
        $user = User::findOrFail($validatedData['admin']);

        // Check if the pivot values are different
        if ($branch->users()->where('user_id', $user->id)->exists()) {
            // Pivot values are the same, no need to update
            return back()->with('success', 'Branch Updated successfully!');
        }

        // get current branch from user which edit now
        $currentBranchUser = $branch->users()->first();
        $currentBranchUser->branches()->detach($branch);

        // update use the requested branch
        $branch->users()->attach($user);

        return redirect("/$slug/dashboard/branches")->with('success', 'Branch updated successfully!');
    }
    // End Handling Branch

    // Handling Orders
    public function indexOrder($slug)
    {
        $user = Auth::user();
        $orders = Order::where('branch_id', $user->branches->first()->id)->get();

        return view('dashboard.orders', [
            'slug' => $slug,
            'orders' => $orders,
        ]);
    }
}
