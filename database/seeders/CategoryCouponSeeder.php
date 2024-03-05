<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryCouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_coupon')->truncate();
        $data[] = [
            'coupon_id'=>1,
            "category_id"=>1,
            'created_at'=>date("Y-m-d H:i:s"),
        ];
        $data[] = [
            'coupon_id'=>1,
            "category_id"=>3,
            'created_at'=>date("Y-m-d H:i:s"),
        ];
        $data[] = [
            'coupon_id'=>1,
            "category_id"=>5,
            'created_at'=>date("Y-m-d H:i:s"),
        ];
        // 
        $data[] = [
            'coupon_id'=>2,
            "category_id"=>2,
            'created_at'=>date("Y-m-d H:i:s"),
        ];
        $data[] = [
            'coupon_id'=>2,
            "category_id"=>4,
            'created_at'=>date("Y-m-d H:i:s"),
        ];
        // 
        $data[] = [
            'coupon_id'=>3,
            "category_id"=>1,
            'created_at'=>date("Y-m-d H:i:s"),
        ];
        $data[] = [
            'coupon_id'=>3,
            "category_id"=>2,
            'created_at'=>date("Y-m-d H:i:s"),
        ];
        $data[] = [
            'coupon_id'=>3,
            "category_id"=>4,
            'created_at'=>date("Y-m-d H:i:s"),
        ];
        $data[] = [
            'coupon_id'=>3,
            "category_id"=>5,
            'created_at'=>date("Y-m-d H:i:s"),
        ];
      
       
       
        foreach($data as $val){
            DB::table('category_coupon')->insert($val);
        }
    }
}
