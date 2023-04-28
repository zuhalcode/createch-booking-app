<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cover;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class CompanyController extends Controller
{
    public function editLandingPage() {
        $cover = Cover::where('id', auth()->user()->company->id)->first();
        return view('dashboard.company.landing-page', ['cover' => $cover]);
    }

    public function editCompany()
    {
        $company = Company::where('id', auth()->user()->company->id)->first();
        return view('dashboard.company.index', ['company' => $company]);
    }

    public function updateLandingPage(Request $req)
    {
        $cover = Cover::where('company_id', auth()->user()->company->id)->first();

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

    public function updateCompany(Request $req)
    {
        $company = Company::where('user_id', auth()->user()->id)->first();

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
}
