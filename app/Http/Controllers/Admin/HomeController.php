<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

class HomeController extends Controller
{
    public function index(){
        return view('admin.pages.home');
    }

    public function check_slug(Request $request){
        $type = $request->type;
        $str = $request->str;
        $slug = Str::slug($str, "-");
        if($type == 'category'){
            $slugInfo = Category::where(['slug'=>$slug])->get()->first();   
        }elseif($type == 'store'){
            $slugInfo = Store::where(['slug'=>$slug])->get()->first();
        }else{
            $finalResult = [
                "code"=>201,
                "success"=>false,
                "msg"=>"Invalid Request"
            ];

            return $finalResult;
        }

        if(is_null($slugInfo)){
            $finalResult = [
                "code"=>200,
                "success"=>true,
                "msg"=>"Valid Slug",
                'slug'=>$slug,
                "data"=>$slugInfo
            ];
        }else{
            $finalResult = [
                "code"=>201,
                "success"=>false,
                "msg"=>"Slug is already taken",
                'slug'=>$slug,
                "data"=>$slugInfo
            ];
        }

        return $finalResult;
    }
}
