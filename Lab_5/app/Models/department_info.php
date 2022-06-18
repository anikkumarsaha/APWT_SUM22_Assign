<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\students_info;

class department_info extends Model
{
    use HasFactory;

    protected $table = "department";
    protected $primaryKey = "d_id";
    public $timestamps=false;

    public function students(){
        return $this->hasMany(students_info::class,'d_id');
    }
}
