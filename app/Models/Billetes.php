<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billetes extends Model
{
    use HasFactory;

    protected $table="billetes";

    public  function ownl(){
        return $this->hasMany(Linea::class);
    }

    public function  ownu(){
        return $this->belongsTo(User::class);
    }
}
