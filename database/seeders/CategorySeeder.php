<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        $data[] = [
            'name'=>"Automotive",
            'slug'=>Str::slug("Automotive", "-"),
            'status'=>1,
        ];
        $data[] = [
            'name'=>"Sports, Fitness & Outdoors",
            'slug'=>Str::slug("Sports, Fitness & Outdoors", "-"),
            'status'=>1,
        ];
        $data[] = [
            'name'=>"Technology",
            'slug'=>Str::slug("Technology", "-"),
            'status'=>1,
        ];
        $data[] = [
            'name'=>"Home and Garden",
            'slug'=>Str::slug("Home and Garden", "-"),
            'status'=>1,
        ];
        $data[] = [
            'name'=>"Legal Services",
            'slug'=>Str::slug("Legal Services", "-"),
            'status'=>1,
        ];
       
       
        foreach($data as $val){
            Category::create($val);
        }
    }
}
