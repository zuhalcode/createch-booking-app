<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Cover;
use App\Models\Company;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    // Handling Dashboard
    public function indexDashboard($slug) {
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

        if($req->hasFile('image')) {
            // Delete Old file
            $oldFile = public_path($cover->image);
            if(file_exists($oldFile)) unlink($oldFile);

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

        if($req->hasFile('logo')) {
            // Delete Old file
            $oldFile = public_path($company->logo);
            if(file_exists($oldFile)) unlink($oldFile);

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
        return view('dashboard.company.branches.index', ['slug' => $slug]);
    }

    public function createBranch($slug)
    {
        $provinces = Province::all();
        $cities = City::all();

        return view('dashboard.company.branches.create', [
            'slug' => $slug,
            'provinces' => $provinces,
            'cities' => $cities,
        ]);
    }

    public function storeBranch(Request $req, $slug)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'phone' => 'required',
            'address' => 'required',
        ]);

        return view('dashboard.company.branches.create', ['slug' => $slug]);
    }
    // End Handling Branch
}
