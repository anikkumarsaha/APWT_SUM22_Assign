<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\department_info;

class DepartmentController extends Controller
{
    function create(){
        $depts = department_info::all();
        /*$dept = new Department();
        $dept->name="CS";
        $dept->save();*/
        return $depts;
    }

    function department()
    {
        $id=2;
        $dept = department_info::where('d_id',$id)->first();
        return $dept->students;
    }
}
