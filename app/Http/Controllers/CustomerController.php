<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Slot;
use App\Models\AddOn;
use App\Models\Cover;
use App\Models\Order;
use App\Models\Company;
use App\Models\Holiday;
use App\Models\Product;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-e-cseZ8LxEVvtAgQCFFBYixX';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

class CustomerController extends Controller
{
    // Handle Homepage
    public function index() 
    {
        if(auth()->check()) $company = Company::where('id', auth()->user()->company->id)->first();
        else $company = Company::findOrFail(1);

        $products = Product::where('company_id', $company->id)->get();
        $cover = Cover::where('company_id', $company->id)->first();
        return view('welcome', [
            'company' => $company,
            'cover' => $cover,
            'products' => $products
        ]);
    }
    // End Homepage

    // Handle Products
    public function showProduct($id)
    {
        $company = Company::where('user_id', 1)->first();
        $product = Product::find($id);

        if(!$product) return abort(404);

        $addons = AddOn::where('product_id', $product->id)->get();
        $slots = Slot::where('product_id', $product->id)->orderBy('time')->get();

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
    // End Products

    // Handle Orders
    public function showOrder($id)
    {
        // Set transaction data
        $params = [
            'transaction_details' => [
                'order_id' => $id,
                'gross_amount' => 200000,
            ],
            'customer_details' => [
                'first_name' => 'semangat',
                'last_name' => 'huwaaa',
                'email' => 'email@gmail.com',
                'phone' => '0237812412',
            ]
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $company = Company::where('user_id', auth()->user()->id)->first();

        return view('order-detail', ['company' => $company, 'payment_token' => $snapToken]);
    }

    public function storeOrder(Request $req)
    {
        $validatedData = $req->validate([
            'product_id' => 'required|exists:products,id',
            'date' => 'required|date',
            'slot_id' => 'required|exists:slots,id',
            'addons.*' => 'nullable|exists:addons,id'
        ]);
        
        $product = Product::findOrFail($validatedData['product_id']);
        
        $totalPrice = $product->price;
        
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'product_id' => $validatedData['product_id'],
            'slot_id' => $validatedData['slot_id'],
            'total_price' => $totalPrice
        ]);
        
        $selectedAddons = Addon::whereIn('id', $validatedData['addons'] ?? [])->get();
        
        foreach ($selectedAddons as $addon) {
            $price = $addon->price;
            $order->addons()->attach($addon->id, ['price' => $price]);
        }

        return redirect("/products/$order->id/order");
    }

    public function indexOrderSuccess() 
    {
        // Generate barcode
        $barcode = QrCode::size(250)->generate('123456789');
        $company = Company::where('id', auth()->user()->company->id)->first();

        // Pass barcode to the view
        return view('order-success', ['barcode' => $barcode, 'company' => $company]);
    }
    // End Orders
}
