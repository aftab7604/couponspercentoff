<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

use App\Models\Admin\Admin;


class LoginController extends Controller
{
    public function index(){
        return view('admin.pages.login');
    }

    public function authenticate(Request $request){
        $credentials['email'] = $request->email;
        $credentials['password'] = $request->password;
        $rules = [
            "email" =>  "required|email",
            "password" =>  "required|min:3",
        ];
        $validator = Validator::make($credentials,$rules);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
            if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }else{
                return redirect()->back()->withErrors(['msg'=>'Invalid Login Attempt'])->withInput();
            }

        }
       
    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}


