<?php

namespace App\Http\Controllers\User;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AddOn;
use App\Models\Slot;

class ProductController extends Controller
{
    public function indexById($id)
    {
        $company = Company::where('user_id', 1)->first();
        $product = Product::find($id);

        if(!$product) return abort(404);

        $addons = AddOn::where('product_id', $product->id)->get();
        $slots = Slot::where('product_id', $product->id)->get();

        return view('product-detail', [
            'company' => $company,
            'product' => $product,
            'addons' => $addons,
            'slots' => $slots
        ]);
    }
}
