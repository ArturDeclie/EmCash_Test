<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Retangulo extends Model{
    protected $table = 'retangulo';
    protected $fillable = ['baseRet','alturaRet','areaRet'];
    public $timestamps = false;
}

