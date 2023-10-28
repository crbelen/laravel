<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class votaproyecto extends Model
{
    use HasFactory;

    public function proyecto(){

        return $this->belongsTo(proyecto::class);
    }



}
