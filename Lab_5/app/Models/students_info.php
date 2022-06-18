<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students_info extends Model
{
    use HasFactory;

    protected $table = "students";
    protected $primaryKey = "s_id";
    public $timestamps=false;
}
