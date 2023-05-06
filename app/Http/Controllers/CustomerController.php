<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Slot;
use App\Models\AddOn;
use App\Models\Branch;
use App\Models\Cover;
use App\Models\Order;
use App\Models\Company;
use App\Models\Holiday;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-e-cseZ8LxEVvtAgQCFFBYixX';
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

class CustomerController extends Controller
{
    // Handle Homepage
    public function index($slug) 
    {
        $company = Company::where('slug', $slug)->first();
        $products = Product::where('company_id', $company->id)->get();
        $cover = Cover::where('company_id', $company->id)->first();

        return view('welcome', [
            'company' => $company,
            'cover' => $cover,
            'products' => $products,
            'slug' => $company->slug,
            'branchSlug' => $company->slug
        ]);
    }
    // End Homepage

    // Handle Products
    public function showProduct($slug, $id)
    {
        $company = Company::where('slug', $slug)->first();
        $product = Product::where('company_id', $company->id)->findOrFail($id);

        if(!$product) return abort(404);

        $addons = AddOn::where('product_id', $product->id)->get();
        $slots = Slot::where('product_id', $product->id)->orderBy('time')->get();

        // Get the holidays for the current month
        $currentDate = Carbon::now();
        $holidays = Holiday::orderBy('date')->pluck('date')->toArray();

        $dates = [];
        for ($i = 0; $i < 30; $i++) {
            $date = $currentDate->copy()->addDays($i);
            $dates[] = $date;
        }

        return view('product-detail', [
            'company' => $company,
            'slug' => $slug,
            'product' => $product,
            'addons' => $addons,
            'slots' => $slots,
            'dates' => $dates,
            'holidays' => $holidays,
        ]);
    }
    // End Products

    // Handle Orders
    public function showOrder($id)
    {
        $order = Order::find($id);
        $user = auth()->user();

        // Set transaction data
        $params = [
            'transaction_details' => [
                'order_id' => $id,
                'gross_amount' => $order->total_price ?? 0,
            ],
            'customer_details' => [
                'first_name' => $user->name,
                'last_name' => '',
                'email' => $user->email,
                'phone' => $user->phone,
            ]
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $company = Company::where('user_id', auth()->user()->id)->first();

        return view('order-detail', [
            'company' => $company, 
            'payment_token' => $snapToken,
            'product' => $order->product,
            'addons' => $order->addons,
            'slot' => $order->slot,
            'order' => $order
        ]);
    }

    public function redirectToOrderDetail(Request $req, $slug)
    {
        $validatedData = $req->validate([
            'product_id' => 'required|exists:products,id',
            'date' => 'required|date',
            'slot_id' => 'required|exists:slots,id',
            'addons.*' => 'nullable|exists:addons,id'
        ]);

        $product = Product::findOrFail($validatedData['product_id']);
        $selectedAddons = Addon::whereIn('id', $validatedData['addons'] ?? [])->get();
        $slot = Slot::find($validatedData['slot_id']);

        $totalPrice = $product->price;

        foreach ($selectedAddons as $addon) $totalPrice += $addon->price;

        return view("order-detail", [
            'slug' => $slug,
            'product' => $product,
            'addons' => $selectedAddons,
            'slot' => $slot,
            'total_price' => $totalPrice,
        ]);
    }

    public function storeOrder(Request $req, $slug)
    {
        $validatedData = $req->validate([
            'product_id' => 'required|exists:products,id',
            'slot_id' => 'required|exists:slots,id',
            'addons.*' => 'nullable|exists:addons,id'
        ]);
        
        $company = Company::where('slug', $slug)->first();

        $product = Product::where('company_id', $company->id)->findOrFail($validatedData['product_id']);
        $selectedAddons = Addon::where('product_id', $product->id)->whereIn('id', $validatedData['addons'] ?? [])->get();

        $totalPrice = $product->price;
        foreach ($selectedAddons as $addon) $totalPrice += $addon->price;

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

        return redirect("/$slug/orders/invoice/$order->id");
    }

    public function indexInvoice($slug, $id) 
    {
        $order = Order::where('user_id', Auth::user()->id)->find($id);
        $company = Company::where('slug', $slug)->first();

        // Set transaction data
        $params = [
            'transaction_details' => [
                'order_id' => rand(1, 99999),
                'gross_amount' => $order->total_price,
            ],
            'customer_details' => [
                'first_name' => $order->user->name,
                'last_name' => '',
                'email' => $order->user->email,
                'phone' => $order->user->phone,
            ]
        ];
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('order-invoice', [
            'company' => $company, 
            'order' => $order, 
            'slug' => $slug,
            'midtrans_token' => $snapToken
        ]);
    }
    // End Orders
}
