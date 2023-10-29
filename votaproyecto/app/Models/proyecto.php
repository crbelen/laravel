<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    use HasFactory;

    public function votos(){

        return $this->hasMany(votaproyecto::class);//creo la relación uno a muchos de un proyecto a muchos votos.

    }


}