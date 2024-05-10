<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'logo',
        'status',
    ];

    public function coupons(){
        return $this->belongsToMany('App\Models\Coupon','category_coupon',"category_id","coupon_id");
    }

    public function blogs(){
        return $this->belongsToMany('App\Models\Blog','blog_category',"category_id","blog_id");
    }
}
