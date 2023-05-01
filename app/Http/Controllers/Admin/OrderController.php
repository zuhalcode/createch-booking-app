<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('dashboard.orders', [
            'orders' => $orders
        ]);
    }
    
    public function indexOrderDetail()
    {
        $orders = Order::where('user_id', auth()->user()->id)->get();

        return view('dashboard.orders', [
            'orders' => $orders
        ]);
    }
}
