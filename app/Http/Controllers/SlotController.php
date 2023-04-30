<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use App\Models\Product;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function indexSlotManagement()
    {
        $products = Product::all();
        return view('dashboard.products.slots', ['products' => $products]);
    }

    public function createSlot(Request $req)
    {
        $validatedData = $req->validate([
            'product_id' => [ 
                'required', function ($attr, $value, $fail) {
                if ($value === 'Choose your product') $fail('Please select a product.');
            }],
            'time.*' => 'required',
            'max_user.*' => 'required|numeric|min:1',
        ]); 

        $companyId = auth()->user()->company->id;

        foreach ($validatedData['time'] as $index => $time) {
            $slotData = [
                'company_id' => $companyId,
                'product_id' => $validatedData['product_id'],
                'time' => $time,
                'max_user' => $validatedData['max_user'][$index]
            ];
            Slot::create($slotData);
        }
        
        return back()->with('success', 'Slot telah ditambahkan!');
    }
}
