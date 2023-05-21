<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use App\Models\Order;
use App\Models\Company;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'company_user');
    }

    public function branches()
    {
        return $this->belongsToMany(Branch::class);
    }
}
