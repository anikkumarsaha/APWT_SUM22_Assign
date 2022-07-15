<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accountsModel;
use App\Models\moviesModel;
use App\Models\customersModel;
use App\Models\customersMoviesModel;

class accountsController extends Controller
{
    function publicLogin(){
        return view('public.login');
    }

    function publicLoginSubmit(Request $req){
        $this->validate($req,
            [
                "username"=>"required|exists:customers,Username",
                "password"=>"required"
            ]);

            $checkUser = customersModel::where('username','=',$req->username)->where('password','=',$req->password)->first();
            if($checkUser){
                session()->put('username',$checkUser->username);
                session()->put('email',$checkUser->email);
                session()->put('password',$checkUser->password);
                session()->put('role',$checkUser->role);
                if($checkUser->role == 'Admin'){
                    return view("admin.dashboard");
                }
            }
            else{
                session()->flash("loginFailedMessage","Login Failed");
                return back();
            }
    }

    function publicLogout(){
        session()->flush();
        return view("public.login");
    }

    function publicRegistration(){
        return view('public.registration');
    }

    function publicRegistrationSubmit(Request $req){
        $this->validate($req,
            [
                "username"=>"required|alpha|unique:accounts,Username",
                "email"=>"required|unique:accounts,Email",
                "password"=>"required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/|min:8",
                "confirmPassword"=>"required|same:password"
            ],
        
            [
                "password.regex"=>"Password must contain upper case, lower case, number and special characters",
                "confirmPassword.same"=>"Confirm password and password must match"
            ]);

            $register = new customersModel();
            $register->username = $req->username;
            $register->email = $req->email;
            $register->password = $req->password;
            
            $register->save();

            return view("public.login");
    }

    function publicForgotPassword(){
        return view('public.forgotPassword');
    }
}
