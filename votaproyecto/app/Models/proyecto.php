<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\HasMany;

class proyecto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre_proyecto',];


    public function votos(){

        return $this->hasMany(votaproyecto::class);//creo la relación uno a muchos de un proyecto a muchos votos.

    }


}