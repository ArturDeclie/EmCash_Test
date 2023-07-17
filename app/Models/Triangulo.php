<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Triangulo extends Model{
    protected $table = 'triangulo';
    protected $fillable = ['baseTri','alturaTri','areaTri'];
    public $timestamps = false;
}