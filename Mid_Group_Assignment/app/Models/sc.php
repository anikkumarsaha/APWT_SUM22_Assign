<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Models\course;
use App\Models\teacher;
use App\Models\student;
use App\Models\department;
use App\Models\tc;

class sc extends Model
{
    use HasFactory;

    protected $table = "sc";
    protected $primaryKey = "sc_id";
    public $timestamps=false;

    public function students(){
        return $this->belongsTo(student::class,'s_id','s_id');
    }

    public function courses(){
        return $this->belongsTo(course::class,'c_id','c_id');
    }
}
