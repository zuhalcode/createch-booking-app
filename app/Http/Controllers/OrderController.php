<?php

namespace App\Http\Controllers;

use App\Models\Company;
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
    public function orderIndex()
    {
        $company = Company::where('user_id', 1)->first();
        return view('order-detail', ['company' => $company]);
    }
    
    public function payment() 
    {
        // Set transaction data
        $orderId = rand(1000000, 9999999);
        $params = array(
            'transaction_details' => array(
                'order_id' => $orderId,
                'gross_amount' => 200000,
            ),
            'customer_details' => array(
                'first_name' => 'semangat',
                'last_name' => 'huwaaa',
                'email' => 'email@gmail.com',
                'phone' => '0237812412',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('order-detail', ['payment_token' => $snapToken]);
    }

    public function orderSuccessIndex() 
    {
        // Generate barcode
        $barcode = QrCode::size(250)->generate('123456789');

        // Pass barcode to the view
        return view('order-success', ['barcode' => $barcode]);
    }
}
