<?php

namespace App\Models;

use App\Models\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feature extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'feature_package');
    }
}
