<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Models\teacher;
use App\Models\student;
use App\Models\department;
use App\Models\tc;
use App\Models\sc;

class course extends Model
{
    use HasFactory;

    protected $table = "course";
    protected $primaryKey = "c_id";
    public $timestamps=false;

    public function teacherscourses(){
        return $this->hasMany(tc::class,'c_id','c_id');
    }

    public function studentscourses(){
        return $this->hasMany(sc::class,'c_id','c_id');
    }
}
