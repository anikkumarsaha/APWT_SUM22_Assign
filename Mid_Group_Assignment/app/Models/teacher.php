<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Models\course;
use App\Models\student;
use App\Models\department;
use App\Models\tc;
use App\Models\sc;

class teacher extends Model
{
    use HasFactory;

    protected $table = "teacher";
    protected $primaryKey = "t_id";
    public $timestamps=false;
}
