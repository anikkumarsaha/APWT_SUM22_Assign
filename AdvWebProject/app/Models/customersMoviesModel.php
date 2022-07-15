<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\accountsModel;
use App\Models\moviesModel;
use App\Models\customersModel;

class customersMoviesModel extends Model
{
    use HasFactory;

    protected $table = "map_user_movie";
    protected $primaryKey = "id";
    public $timestamps=false;

    public function customersModel(){
        return $this->belongsTo(customersModel::class,'c_id','id');
    }

    public function moviesModel(){
        return $this->belongsTo(moviesModel::class,'m_id','id');
    }
}
