<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'title',
        'description',
        'logo',
        'meta',
        'status',
    ];

    public function coupons(){
        return $this->hasMany('App\Models\Coupon');
    }
}
