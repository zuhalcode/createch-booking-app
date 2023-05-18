<?php

namespace App\Models;

use App\Models\Branch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialMedia extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'social_medias';


    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
