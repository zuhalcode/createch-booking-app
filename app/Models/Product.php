<?php

namespace App\Models;

use App\Models\Slot;
use App\Models\AddOn;
use App\Models\Order;
use App\Models\Branch;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function addons()
    {
        return $this->hasMany(AddOn::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
