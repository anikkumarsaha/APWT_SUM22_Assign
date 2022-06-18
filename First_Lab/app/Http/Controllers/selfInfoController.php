<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class selfInfoController extends Controller
{
  function selfInfo(){
      return view("selfInfo.home");
  }
}
