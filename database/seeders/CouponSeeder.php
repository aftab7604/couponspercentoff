<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupons')->truncate();
        $data[] = [
            "store_id"=>1,
            'name'=>"20% OFF FRESH FRUITS & VEGETABLES EVERY TIME YOU SHOP AT SMART & FINAL!",
            'code'=>"28500",
            'status'=>1,
        ];
        $data[] = [
            "store_id"=>1,
            'name'=>"$20 Off Delivery Now at Dillons.com",
            'code'=>"DELIVERYNOW20",
            'status'=>1,
        ];

        $data[] = [
            "store_id"=>1,
            'name'=>"Enjoy 20% off on shop 2 items",
            'code'=>"NXMX43234",
            'status'=>1,
        ];
        
       
        foreach($data as $val){
            Coupon::create($val);
        }
    }
}
