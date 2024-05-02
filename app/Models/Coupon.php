<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        "store_id",
        'name',
        'code',
        'status',
    ];

    public function store(){
        return $this->belongsTo('App\Models\Store');
    }

    public function categories(){
        return $this->belongsToMany('App\Models\Category','category_coupon',"coupon_id","category_id");
    }
}
