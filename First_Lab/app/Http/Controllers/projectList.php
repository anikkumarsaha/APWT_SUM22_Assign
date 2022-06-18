<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectList extends Controller
{
  function projectList(){
      return view('selfInfo.projects');
  }
}
