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

use App\Models\Category;
use App\Models\Store;
use App\Models\Page;

class PageController extends Controller
{
    public function index(){
        $data['pages'] = Page::orderBy("id","desc")->get()->toArray();
        return view("admin.pages.page_list",$data);
    }

    public function get_by_id($id){
        $page = Page::where(['id'=>$id])->get()->first();
        if($page){
            $finalResult = [
                "code"=>200,
                'success' => true,
                'msg'=>"Data Found",
                'errors' => null,
                'data'=>$page
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

    public function update(Request $request){
        
        $controls['id'] = $request->id;
        $controls['content'] = $request->content;
        $controls['meta'] = $request->meta;
        $currentData = Page::where(["id"=>$controls['id']])->get()->first()->toArray();

        $rules = [
            "id"=>"required",
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

            $update_data = [
                "content"=>$controls['content'],
                "meta"=>$controls['meta'],
            ];
            
            
            $updated = Page::where(["id"=>$controls['id']])->update($update_data);
            
            if($updated){
                $finalResult = [
                    "code"=>200,
                    'success' => true,
                    'msg'=>'Page updated successfylly',
                    'error' => null
                ];
            }else{
                $finalResult = [
                    "code"=>201,
                    'success' => false,
                    'msg'=>null,
                    'error' => 'Something went wrong with updating page.'
                ];
            }
        }

        return $finalResult;
    }
}
