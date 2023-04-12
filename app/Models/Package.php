<?php

namespace App\Models;

use App\Models\Feature;
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'feature_package');
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
