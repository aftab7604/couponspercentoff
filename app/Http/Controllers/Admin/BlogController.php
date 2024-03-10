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
use App\Models\Coupon;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $data['blogs'] = Blog::with("categories")->get()->toArray();
        $data['categories'] = Category::where(["status"=>1])->orderBy("id","desc")->get()->toArray();
        return view("admin.pages.blog_list",$data);
    }

    public function create(Request $request){
       

        $controls['slug'] = $request->slug;
        $controls['title'] = $request->title;
        $controls['content'] = $request->content;
        $controls['focus_keyword'] = $request->focus_keyword;
        $controls['image'] = $request->image;
        $controls['meta'] = $request->meta;
        $controls['categories'] = !empty($request->category_ids) ? explode(",",$request->category_ids) : "";

        $rules = [
            "title" => "required",
            "slug" => "required|unique:blogs,slug",
            "image"=>"required|mimes:png,jpg,jpeg|max:2048",
            "categories"=>"required",
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
            $destinationPath = "uploads/blog";
            $file->move($destinationPath,$fileName);
        
            $added = Blog::create([
                "image"=>$fileName,
                "slug"=>$controls['slug'],
                "title"=>$controls['title'],
                "content"=>$controls['content'],
                "focus_keyword"=>$controls['focus_keyword'],
                "meta"=>$controls['meta'],
                "status"=>1
            ]);
            
            if($added){
                $id = $added->id;
                Blog::find($id)->categories()->attach($controls['categories']);
                
                $finalResult = [
                    "code"=>200,
                    'success' => true,
                    'msg'=>'Blog added successfylly',
                    'error' => null
                ];
            }else{
                $finalResult = [
                    "code"=>201,
                    'success' => false,
                    'msg'=>null,
                    'error' => 'Something went wrong with inserting blog.'
                ];
            }
        }

        return $finalResult;
    }

    public function delete(Request $request){
        $id = $request->id;
        $blog = Blog::find($id);
        if($blog->delete()){
            $blog->categories()->detach();
            $finalResult = [
                "code"=>200,
                'success' => true,
                'msg'=> "Blog deleted successfully",
                'error' => null
            ];
        }else{
            $finalResult = [
                "code"=>201,
                'success' => false,
                'msg'=>null,
                'error' => 'Something went wrong with deleting blog.'
            ];
        }     
        return $finalResult;   
    }

    public function update(Request $request){
        
        $controls['id'] = $request->id;
        $controls['slug'] = $request->slug;
        $controls['title'] = $request->title;
        $controls['content'] = $request->content;
        $controls['focus_keyword'] = $request->focus_keyword;
        $controls['meta'] = $request->meta;
        $controls['image'] = $request->image;
        $controls['categories'] = !empty($request->category_ids) ? explode(",",$request->category_ids) : "";
        
        $currentData = Blog::find($controls['id']); 
        $rules = [
            "id"=>"required",
            "title" => "required",
            "categories"=>"required",
        ];

        if (request()->hasFile('image')) {
            $rules = array_merge($rules, [
                "image"=>"mimes:png,jpg,jpeg|max:2048",
            ]);
        }

        if($currentData->slug != $controls['slug']){
            $rules = array_merge($rules,[
                "slug" => "required|unique:blogs,slug",
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
                "slug"=>$controls['slug'],
                "title"=>$controls['title'],
                "content"=>$controls['content'],
                "focus_keyword"=>$controls['focus_keyword'],
                "meta"=>$controls['meta'],
            ];

            if (request()->hasFile('image')) {
                $file = $request->file("image");
                $fileName = $file->hashName();
                $destinationPath = "uploads/blog";
                $file->move($destinationPath,$fileName);
                File::delete(public_path($destinationPath."/".$currentData['image']));
                $update_data['image'] = $fileName;
            }
        
            $updated = Blog::where(["id"=>$controls['id']])->update($update_data);
            
            if($updated){
                $currentData->categories()->detach();
                $currentData->categories()->attach($controls['categories']);

                $finalResult = [
                    "code"=>200,
                    'success' => true,
                    'msg'=>'Blog updated successfylly',
                    'error' => null
                ];
            }else{
                $finalResult = [
                    "code"=>201,
                    'success' => false,
                    'msg'=>null,
                    'error' => 'Something went wrong with updating blog.'
                ];
            }
        }

        return $finalResult;
    }

    public function get_by_id($id){
        $data = Blog::with("categories")->where(['id'=>$id])->get()->first();
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
