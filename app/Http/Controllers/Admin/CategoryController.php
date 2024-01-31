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

class CategoryController extends Controller
{
    public function index(){
        return view("admin.pages.categories_list");
    }

    public function create(Request $request){
        $controls['category_name'] = $request->category_name;
        $controls['category_slug'] = $request->category_slug;
        $rules = [
            "category_name" => "required|unique:categories,name",
            "category_slug" => "required|unique:categories,slug"
        ];

        $validator = Validator::make($controls,$rules);
        if($validator->fails()){
            $finalResult = [
                "code"=>202,
                'success' => false,
                'msg'=>'Invalid Request - Validation erros',
                'errors' => $validator->getMessageBag()->toArray()
            ];
        }else{
            $added = Category::create([
                "name"=>$controls['category_name'],
                "slug"=>$controls['category_slug'],
                "status"=>1
            ]);
            
            if($added){
                $finalResult = [
                    "code"=>200,
                    'success' => true,
                    'msg'=>'Category added successfylly',
                    'error' => null
                ];
            }else{
                $finalResult = [
                    "code"=>201,
                    'success' => false,
                    'msg'=>'Something went wrong with inserting category.',
                    'error' => 'Something went wrong with inserting category.'
                ];
            }
        }

        return $finalResult;
    }

}
