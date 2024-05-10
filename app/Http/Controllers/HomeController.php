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
use App\Models\Page;

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
        $data['copy_coupon'] = null;
        if(isset($_GET['c']) && !empty($_GET['c'])){
            $coupon = Coupon::where("id",$_GET['c'])->first()->toArray();
            $data['copy_coupon'] = $coupon;
        }
        
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

    public function termsandconditions(){
        $data['page'] = Page::where(['slug'=>'terms-and-conditions'])->first()->toArray();
        return view("pages.terms-and-conditions",$data);
    }

    public function privacypolicy(){
        $data['page'] = Page::where(['slug'=>'privacy-policy'])->first()->toArray();
        return view("pages.privacy-policy",$data);
    }

    public function disclaimer(){
        $data['page'] = Page::where(['slug'=>'disclaimer'])->first()->toArray();
        return view("pages.disclaimer",$data);
    }

    public function aboutus(){
        $data['page'] = Page::where(['slug'=>'about-us'])->first()->toArray();
        return view("pages.about-us",$data);
    }

    public function contactus(){
        $data['page'] = Page::where(['slug'=>'contact-us'])->first()->toArray();
        return view("pages.contact-us",$data);
    }    

    public function blogs(){
        $data['blogs'] = Blog::where(['status'=>1])->with("categories")->get()->toArray();
        $data['categories'] = Category::where(['status'=>1])->get()->toArray();
        return view("pages.blogs",$data);
    }
}
