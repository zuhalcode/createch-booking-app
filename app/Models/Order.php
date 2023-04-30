<?php

namespace App\Models;

use App\Models\Slot;
use App\Models\User;
use App\Models\AddOn;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function slots()
    {
        return $this->belongsTo(Slot::class);
    }

    public function addons()
    {
        return $this->belongsToMany(AddOn::class, 'addon_order', 'order_id', 'addon_id')->withPivot('price');
    }
}
