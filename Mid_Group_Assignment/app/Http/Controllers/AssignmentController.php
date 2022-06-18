<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\teacher;
use App\Models\student;
use App\Models\department;
use App\Models\tc;
use App\Models\sc;

class AssignmentController extends Controller
{
    function deptInfo(){
        $id=1;

        $dept = department::where('d_id',$id)->first();
        
        return view('public.info')
        ->with('d_id',$dept);
    }
}
