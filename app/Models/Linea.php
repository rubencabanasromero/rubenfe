<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    use HasFactory;

    protected $table="lineas";


    public  function own(){
        return $this->hasMany(Estacion::class);
    }
}
