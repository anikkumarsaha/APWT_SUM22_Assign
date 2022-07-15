<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\accountsModel;
use App\Models\moviesModel;
use App\Models\customersMoviesModel;

class customersModel extends Model
{
    use HasFactory;

    protected $table = "customers";
    protected $primaryKey = "id";
    public $timestamps=false;
}
