<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Models\course;
use App\Models\teacher;
use App\Models\student;
use App\Models\department;
use App\Models\sc;

class tc extends Model
{
    use HasFactory;

    protected $table = "tc";
    protected $primaryKey = "tc_id";
    public $timestamps=false;

    public function teachers(){
        return $this->belongsTo(teacher::class,'t_id','t_id');
    }

    public function courses(){
        return $this->belongsTo(course::class,'c_id','c_id');
    }
}
