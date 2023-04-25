<?php

namespace App\Models;

use App\Models\Branch;
use App\Models\Company;
use App\Models\Province;
use Database\Factories\CityFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    
    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
