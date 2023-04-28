<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddOn extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'addons';

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'addon_order')->withPivot('price');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
