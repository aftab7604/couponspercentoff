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

class HomeController extends Controller
{
    public function index(){
        $data['coupons'] = Coupon::with(['store','categories'])->get()->toArray();
        $data['stores'] = Store::where(['status'=>1])->with("coupons")->get()->toArray();
        return view("pages.index",$data);
    }

    public function store($slug){
        $data['store'] = Store::where(['slug'=>$slug,'status'=>1])->with("coupons")->get()->first()->toArray();
        $data['stores'] = Store::where(['status'=>1])->with("coupons")->get()->toArray();
        // dd($data['store']);
        return view("pages.store",$data);
    }
}
