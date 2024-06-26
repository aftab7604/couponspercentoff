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
use Illuminate\Support\Facades\File;

use App\Models\Coupon;
use App\Models\Category;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(){
        $data['stores'] = Store::where(["status"=>1])->orderBy("id","desc")->get()->toArray();
        return view("admin.pages.store_list",$data);
    }

    public function create(Request $request){
        $controls['name'] = $request->name;
        $controls['title'] = $request->title;
        $controls['description'] = $request->description;
        $controls['slug'] = $request->slug;
        $controls['image'] = $request->image;
        $controls['meta'] = $request->meta;

        $rules = [
            "name" => "required",
            "slug" => "required|unique:stores,slug",
            "image"=>"required|mimes:png,jpg,jpeg|max:2048"
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
            $file = $request->file("image");
            $fileName = $file->hashName();
            $destinationPath = "uploads/store";
            $file->move($destinationPath,$fileName);
        
            $added = Store::create([
                "logo"=>$fileName,
                "name"=>$controls['name'],
                "title"=>$controls['title'],
                "description"=>$controls['description'],
                "slug"=>$controls['slug'],
                "meta"=>$controls['meta'],
                "status"=>1
            ]);
            
            if($added){
                $finalResult = [
                    "code"=>200,
                    'success' => true,
                    'msg'=>'Store added successfylly',
                    'error' => null
                ];
            }else{
                $finalResult = [
                    "code"=>201,
                    'success' => false,
                    'msg'=>null,
                    'error' => 'Something went wrong with inserting store.'
                ];
            }
        }

        return $finalResult;
    }

    public function delete(Request $request){
        $id = $request->id;
        $store = Store::find($id);
        if($store){
            $store->delete();
            $finalResult = [
                "code"=>200,
                'success' => true,
                'msg'=> "Store deleted successfully",
                'error' => null
            ];
        }else{
            $finalResult = [
                "code"=>201,
                'success' => false,
                'msg'=>null,
                'error' => 'Something went wrong with deleting store.'
            ];
        }     
        return $finalResult;   
    }

    public function update(Request $request){
        
        $controls['id'] = $request->id;
        $controls['name'] = $request->name;
        $controls['slug'] = $request->slug;
        $controls['title'] = $request->title;
        $controls['description'] = $request->description;
        $controls['image'] = $request->image;
        $controls['meta'] = $request->meta;
        $currentData = Store::where(["id"=>$controls['id']])->get()->first()->toArray();

        
        $rules = [
            "id"=>"required",
            "name" => "required",
        ];

        if($currentData['slug'] != $controls['slug']){
            $rules = array_merge($rules,[
                "slug" => "required|unique:stores,slug",
            ]);
        }

        if (request()->hasFile('image')) {
            $rules = array_merge($rules, [
                "image"=>"mimes:png,jpg,jpeg|max:2048",
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
                "slug"=>$controls['slug'],
                "title"=>$controls['title'],
                "description"=>$controls['description'],
                "meta"=>$controls['meta'],
            ];
            
            if (request()->hasFile('image')) {
                $file = $request->file("image");
                $fileName = $file->hashName();
                $destinationPath = "uploads/store";
                $file->move($destinationPath,$fileName);
                File::delete(public_path($destinationPath."/".$currentData['logo']));
                $update_data['logo'] = $fileName;
            }

            

            $updated = Store::where(["id"=>$controls['id']])->update($update_data);
            
            if($updated){
                $finalResult = [
                    "code"=>200,
                    'success' => true,
                    'msg'=>'Store updated successfylly',
                    'error' => null
                ];
            }else{
                $finalResult = [
                    "code"=>201,
                    'success' => false,
                    'msg'=>null,
                    'error' => 'Something went wrong with updating store.'
                ];
            }
        }

        return $finalResult;
    }

    public function get_by_id($id){
        $store = Store::where(['id'=>$id])->get()->first();
        if($store){
            $finalResult = [
                "code"=>200,
                'success' => true,
                'msg'=>"Data Found",
                'errors' => null,
                'data'=>$store
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
