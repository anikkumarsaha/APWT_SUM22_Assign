<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;

use App\Models\course;
use App\Models\teacher;
use App\Models\department;
use App\Models\tc;
use App\Models\sc;

class student extends Model
{
    use HasFactory;

    protected $table = "student";
    protected $primaryKey = "s_id";
    public $timestamps=false;
}
