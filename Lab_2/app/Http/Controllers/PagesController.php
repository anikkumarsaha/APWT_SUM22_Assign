<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    function home(){
        return view("public.home");
    }

    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|max:10|min:3",
                "password"=>"required|min:8",
            ],
        
            [
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 10 characters",
            ]);

        return "Form submitted";
        
    }
}
