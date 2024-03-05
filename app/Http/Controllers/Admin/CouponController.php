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
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index(){
        $data['coupons'] = Coupon::with(['store','categories'])->get()->toArray();
        $data['stores'] = Store::where(['status'=>1])->get()->toArray();
        $data['categories'] = Category::where(["status"=>1])->orderBy("id","desc")->get()->toArray();
        return view("admin.pages.coupon_list",$data);
    }

    public function create(Request $request){
        $controls['name'] = $request->name;
        $controls['code'] = $request->code;
        $controls['store'] = $request->store_id;
        $controls['categories'] = $request->category_ids;

        $rules = [
            "name" => "required",
            "code" => "required|unique:coupons,code",
            "store"=>"required",
            "categories"=>"required"
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
            $added = Coupon::create([
                "name"=>$controls['name'],
                "code"=>$controls['code'],
                "store_id"=>$controls['store'],
                "status"=>1
            ]);
            
            if($added){
                $id = $added->id;

                Coupon::find($id)->categories()->attach($controls['categories']);
                
                $finalResult = [
                    "code"=>200,
                    'success' => true,
                    'msg'=>'Coupon added successfylly -  with id '.$id,
                    'error' => null
                ];
            }else{
                $finalResult = [
                    "code"=>201,
                    'success' => false,
                    'msg'=>null,
                    'error' => 'Something went wrong with inserting coupon.'
                ];
            }
        }

        return $finalResult;
    }

    public function delete(Request $request){
        $id = $request->id;
        $coupon = Coupon::find($id);
        if($coupon->delete()){
            $coupon->categories()->detach();
            $finalResult = [
                "code"=>200,
                'success' => true,
                'msg'=> "Coupon deleted successfully",
                'error' => null
            ];
        }else{
            $finalResult = [
                "code"=>201,
                'success' => false,
                'msg'=>null,
                'error' => 'Something went wrong with deleting coupon.'
            ];
        }     
        return $finalResult;   
    }

    public function update(Request $request){
        
        $controls['id'] = $request->id;
        $controls['name'] = $request->name;
        $controls['code'] = $request->code;
        $controls['store'] = $request->store_id;
        $controls['categories'] = $request->category_ids;

        $currentData = Coupon::find($controls['id']); 
        $rules = [
            "id"=>"required",
            "name" => "required",
            "store"=>"required",
            "categories"=>"required",
        ];

        if($currentData->code != $controls['code']){
            $rules = array_merge($rules,[
                "code" => "required|unique:coupons,code",
            ]);
        }

        $validator = Validator::make($controls,$rules);
        if($validator->fails()){
            $finalResult = [
                "code"=>202,
                'success' => false,
                'msg'=>'Invalid Request - Validation erros',
                'errors' => $validator->getMessageBag()->toArray()
            ];
        }else{

            $update_data = [
                "name"=>$controls['name'],
                "code"=>$controls['code'],
                "store_id"=>$controls['store'],
            ];
        
            $updated = Coupon::where(["id"=>$controls['id']])->update($update_data);
            
            if($updated){
                $currentData->categories()->detach();
                $currentData->categories()->attach($controls['categories']);

                $finalResult = [
                    "code"=>200,
                    'success' => true,
                    'msg'=>'Coupon updated successfylly',
                    'error' => null
                ];
            }else{
                $finalResult = [
                    "code"=>201,
                    'success' => false,
                    'msg'=>null,
                    'error' => 'Something went wrong with updating coupon.'
                ];
            }
        }

        return $finalResult;
    }

    public function get_by_id($id){
        $data = Coupon::with("categories")->where(['id'=>$id])->get()->first();
        if($data){
            $finalResult = [
                "code"=>200,
                'success' => true,
                'msg'=>"Data Found",
                'errors' => null,
                'data'=>$data
            ];
        }else{
            $finalResult = [
                "code"=>201,
                'success' => false,
                'msg'=>null,
                'errors' => 'Record not found',
                'data'=>array()
            ];
        }
        return $finalResult;
    }
}
