<?php

namespace App\Http\Controllers\User;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AddOn;

class ProductController extends Controller
{
    public function indexById($id)
    {
        $company = Company::where('user_id', 1)->first();
        $product = Product::find($id);
        $addons = AddOn::where('product_id', $product->id)->get();

        return view('product-detail', [
            'company' => $company,
            'product' => $product,
            'addons' => $addons,
        ]);
    }
}
