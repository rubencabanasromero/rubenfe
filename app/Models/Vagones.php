<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagones extends Model
{
    use HasFactory;

    protected $table="vagones";

    public  function own(){
        return $this->hasMany(Billetes::class);
    }
}
