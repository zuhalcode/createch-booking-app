<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cover;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function editLandingPage() {
        $cover = Cover::where('id', auth()->user()->company->id)->first();
        return view('dashboard.company.landing-page', ['cover' => $cover]);
    }

    public function createCover(Request $req)
    {
        $validatedData = $req->validate([
            'first_heading_text' => 'required|max:255',
            'second_heading_text' => 'required|max:255',
            'short_desc' => 'required',
        ]);

        if($req->hasFile('image')) {
            $image = $req->file('image')->store('product-images');
        }

        $cover = new Cover;
        $cover->company_id = 1;
        $cover->first_heading_text = $validatedData['first_heading_text'];
        $cover->second_heading_text = $validatedData['second_heading_text'];
        $cover->short_desc = $validatedData['short_desc'];
        $cover->image = "/storage/$image";
        $cover->save();
    }

    public function indexCompany()
    {
        $company = Company::where('id', auth()->user()->company->id)->first();
        return view('dashboard.company.index', ['company' => $company]);
    }

    public function editCompany(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'socmed.*' => 'required'
        ]);

        dd($validatedData);
    }

    

    
}
