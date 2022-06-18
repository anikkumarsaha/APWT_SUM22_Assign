<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Models\course;
use App\Models\teacher;
use App\Models\student;
use App\Models\tc;
use App\Models\sc;

class department extends Model
{
    use HasFactory;

    protected $table = "department";
    protected $primaryKey = "d_id";
    public $timestamps=false;

    public function students(){
        return $this->hasMany(student::class,'d_id','d_id');
    }

    public function teachers(){
        return $this->hasMany(teacher::class,'d_id','d_id');
    }

    public function courses(){
        return $this->hasMany(course::class,'d_id','d_id');
    }
}
