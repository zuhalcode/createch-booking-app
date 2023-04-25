<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Cover;
use Illuminate\Http\Request;

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

    public function showLandingPageForm() {
        return view('dashboard.landing-pages');
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
        $cover->image = $image;
        $cover->save();
    }
}
