<?php

namespace App\Http\Controllers\User;

use App\Models\Slot;
use App\Models\AddOn;
use App\Models\Order;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-e-cseZ8LxEVvtAgQCFFBYixX';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;


class OrderController extends Controller
{
    public function orderIndex(Request $req)
    {
        // Set transaction data
        $orderId = rand(1000000, 9999999);
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
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
        $company = Company::where('user_id', 1)->first();

        return view('order-detail', ['company' => $company, 'payment_token' => $snapToken]);
    }

    public function createOrder(Request $req)
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

    public function orderSuccessIndex() 
    {
        // Generate barcode
        $barcode = QrCode::size(250)->generate('123456789');
        $company = Company::where('id', auth()->user()->company->id)->first();

        // Pass barcode to the view
        return view('order-success', ['barcode' => $barcode, 'company' => $company]);
    }
}
