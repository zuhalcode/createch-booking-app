<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Slot;
use App\Models\AddOn;
use App\Models\Company;
use App\Models\Holiday;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function indexById($id)
{
    $company = Company::where('user_id', 1)->first();
    $product = Product::find($id);

    if(!$product) return abort(404);

    $addons = AddOn::where('product_id', $product->id)->get();
    $slots = Slot::where('product_id', $product->id)->get();

    // Get the holidays for the current month
    $currentDate = Carbon::now();
    $holidays = Holiday::orderBy('date')->get();

    $dates = [];
    for ($i = 0; $i < 30; $i++) {
        $date = $currentDate->copy()->addDays($i);
        $dates[] = $date;
    }

    $holidayDates = $holidays->pluck('date')->toArray();

    return view('product-detail', [
        'company' => $company,
        'product' => $product,
        'addons' => $addons,
        'slots' => $slots,
        'dates' => $dates,
        'holidays' => $holidays,
        'holidayDates' => $holidayDates,
    ]);
}

}
