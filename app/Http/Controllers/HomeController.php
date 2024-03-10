<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

use App\Models\Category;
use App\Models\Store;
use App\Models\Coupon;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(){
        $data['coupons'] = Coupon::with(['store','categories'])->get()->toArray();
        $data['stores'] = Store::where(['status'=>1])->with("coupons")->get()->toArray();
        $data['blogs'] = Blog::where(['status'=>1])->with("categories")->get()->toArray();
        $data['categories'] = Category::where(['status'=>1])->get()->toArray();
        return view("pages.index",$data);
    }

    public function store($slug){
        $data['store'] = Store::where(['slug'=>$slug,'status'=>1])->with("coupons")->get()->first()->toArray();
        $data['stores'] = Store::where(['status'=>1])->with("coupons")->get()->toArray();
        // dd($data['store']);
        return view("pages.store",$data);
    }

    public function blog($slug){
        $data['blog'] = Blog::where(['slug'=>$slug,'status'=>1])->with("categories")->get()->first()->toArray();
        $data['blogs'] = Blog::where(['status'=>1])->with("categories")->get()->toArray();
        // dd($data['blog']);
        return view("pages.blog",$data);
    }

    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        $data['stores'] = $category->coupons()->with('store')->get()->pluck('store')->unique('id')->toArray(); 
        return view("pages.category",$data);        
    }
}
