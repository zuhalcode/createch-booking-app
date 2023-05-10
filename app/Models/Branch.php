<?php

namespace App\Models;

use App\Models\City;
use App\Models\Company;
use App\Models\Holiday;
use App\Models\Product;
use App\Models\SocialMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function holidays()
    {
        return $this->belongsToMany(Holiday::class, 'branch_holiday');
    }

    public function social_medias()
    {
        return $this->hasMany(SocialMedia::class);
    }

    public function slots()
    {
        return $this->belongsToMany(Slot::class);
    }
}
