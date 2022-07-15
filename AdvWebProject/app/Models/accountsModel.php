<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\moviesModel;
use App\Models\customersModel;
use App\Models\customersMoviesModel;

class accountsModel extends Model
{
    use HasFactory;

    protected $table = "accounts";
    protected $primaryKey = "id";
    public $timestamps=false;

    public function accountsModel(){
        return $this->hasMany(customersModel::class,'c_id','id');
    }
}
