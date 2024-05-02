<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($store) {
            // Delete related coupons and categories associated with the coupons
            $store->coupons()->each(function ($coupon) {
                $coupon->categories()->detach();
                $coupon->delete();
            });
        });
    }
}
