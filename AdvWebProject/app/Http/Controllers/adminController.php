<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\accountsModel;
use App\Models\moviesModel;
use App\Models\customersModel;
use App\Models\customersMoviesModel;

class adminController extends Controller
{
    function adminDashboard(){
        return view('admin.dashboard');
    }

    function adminProfile(){
        return view('admin.profile');
    }

    function adminChangePassword(){
        return view('admin.changePassword');
    }

    function adminChangePasswordSubmit(Request $req){
        $this->validate($req,
            [
                "curr_pass"=>"required",
                "new_pass"=>"required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[@!$#%]).*$/|min:8",
                "conf_pass"=>"required|same:new_pass"
            ]);

            $checkUser = customersModel::where('username','=',$req->username)->first();
            if($req->curr_pass == $checkUser->password){
                $checkUser->password= $req->new_pass;
                $checkUser->save();
                session()->put('password',$req->new_pass);
                return view('admin.profile');
            }
    }

    function adminCheckCustomersMovies(){
        $customersMovies = customersMoviesModel::all();
        return view('admin.dashboard')->with('CheckCustomersMovies',$customersMovies);
    }
}
