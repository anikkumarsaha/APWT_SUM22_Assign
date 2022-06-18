<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\customer;

class StudentController extends Controller
{
    //
    public function details($id){
        $name="Student $id";
        $dob ="4456";
        return view('student.details')
        ->with('n',$name)
        ->with('id',$id)
        ->with('dob',$dob);
    }
    public function list(){
        /*$students = [];
        for($i=1;$i<=10;$i++){
            $st = array(
                "id"=>$i,
                "name"=>"Student $i",
                "dob"=>"1212"
            );
            $students[] = (object)$st;
        }*/
        $students = customer::all(); //select * from students
        //$students = Student::where('id','>=',2)->first();
        //return $students;
        
        
        return view('student.list')->with('students',$students);

    }
    function create(){
        return view('student.create');
    }
    function createSubmit(Request $req){
        $this->validate($req,
            [
                "name"=>"required|alpha",
                "dob"=>"required|date|before:-17 years",
                "email"=>"required|email",
                "password"=>"required|min:8",
                "conf_password"=>"required|min:8|same:password",
                "mobile"=>"required|max:11|numeric"
            ],
        
            [
                "name.required"=>"Please provide your name",
                "name.max"=>"Name should not exceed 10 characters",

                
            ]);
            $st = new customer();
            $st->name = $req->name;
            $st->email =$req->email;
            $st->dob = $req->dob;
            $st->mobile = $req->mobile;
            $st->pass =$req->password;
            $st->confPass = $req->conf_password;
            $st->save();
        return "Form submitted";
        
    }
}
