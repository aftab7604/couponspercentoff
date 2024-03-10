<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->truncate();
        $data[] = [
            'image'=>"no-image.png",
            'title'=>"Maximizing your savings with coupons and promo codes",
            'slug'=>Str::slug("Maximizing your savings with coupons and promo codes", "-"),
            'content'=>"<h2>Maximizing your savings</h2><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, placeat!",
            'focus_keyword'=>"Maximizing your savings",
            'meta'=>"",
            'status'=>1,
        ];

        $data[] = [
            'image'=>"no-image.png",
            'title'=>"How to Save Money on Shopping - Expert Guide",
            'slug'=>Str::slug("How to Save Money on Shopping - Expert Guide", "-"),
            'content'=>"<h2>How to Save Money on Shopping - Expert Guide</h2><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, placeat!",
            'focus_keyword'=>"How to Save Money",
            'meta'=>"",
            'status'=>1,
        ];

        $data[] = [
            'image'=>"no-image.png",
            'title'=>"Expert Guide to How to get discounts on shopping",
            'slug'=>Str::slug("Expert Guide to How to get discounts on shopping", "-"),
            'content'=>"<h2>Expert Guide to How to get discounts on shopping</h2><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, placeat!",
            'focus_keyword'=>"How to get discounts on shopping",
            'meta'=>"",
            'status'=>1,
        ];

        
        
       
       
        foreach($data as $val){
            Blog::create($val);
        }
    }
}
