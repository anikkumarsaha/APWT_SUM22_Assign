<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\myUsers;

class userController extends Controller
{
    function home(){
        return view("public.home");
    }

    function create(){
        return view('user.create');
    }

    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|alpha",
                "email"=>"required|unique:users,email",
                "password"=>"required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/|min:8",
                "conf_password"=>"required|same:password"
            ],
        
            [
                "password.regex"=>"Password must contain upper case, lower case, number and special characters",
                "conf_password.same"=>"Confirm password and password must match"
            ]);

            $us = new myUsers();
            $us->name = $req->name;
            $us->email =$req->email;
            $us->password =$req->password;
            
            $us->save();

            return view("public.home");
    }

    function login(){
        return view('user.login');
    }

    function loginSubmit(Request $req){
        $this->validate($req,
            [
                "email"=>"required|exists:users,email",
                "password"=>"required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/|min:8|exists:users,password",
            ],
        
            [
                "password.regex"=>"Password must contain upper case, lower case, number and special characters",
            ]);

            $users = myUsers::all();

            $checkUsers = myUsers::where('email','=',$req->email)->first();

            if($checkUsers->type == 'User'){
                return view('user.list')->with('users',$users);
            }

            else{
                return view('user.adminList')->with('users',$users);
            }
    }

    public function list(){
        $users = myUsers::all();
        
        return view('user.list')->with('users',$users);
    }

    public function details($id){
        $user = myUsers::where('id','=',$id)->first(); 
        
        return view('user.details') -> with('user',$user);
    }
}
