<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Store;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->truncate();
       
        $data[] =  [
            'name'=>"Acer Store",
            'slug'=>Str::slug("Acer Store", "-"),
            'title'=>"Save Up To 50% Off At Acer Store",
            'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Non modi neque aliquam facilis, facere magnam nam repellat ex iusto, porro nesciunt eaque similique omnis ab placeat repellendus doloribus ea optio.",
            'logo'=>"no-image.png",
            'meta'=>'<meta name="title" content="Save Big with Online Promo Codes - Coupons Percent Off">
            <meta name="description" content="Get the best deals and save big with our exclusive coupons! Enjoy incredible percent-off discounts on a wide range of products and services. start your savings today!">',
            'status'=>1,
        ];
               
        foreach($data as $val){
            Store::create($val);
        }
    }
}
