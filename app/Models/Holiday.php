<?php

namespace App\Models;

use App\Models\Branch;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Holiday extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function company() {
        return $this->belongsTo(Company::class);
    }

    public function branches() {
        return $this->belongsToMany(Branch::class, 'branch_holiday');
    }
}
