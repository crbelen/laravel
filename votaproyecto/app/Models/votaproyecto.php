<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class votaproyecto extends Model
{
    use HasFactory;

    protected $fillable = ['id_proyecto', ];
    
    public function proyecto(){

        return $this->belongsTo(proyecto::class);
    }



}
