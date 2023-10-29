<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Events\ChirpCreated;
class Chirp extends Model
{
    use HasFactory;
    protected $fillable =[
        'message',
    ]; 

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];
    
    //Belongsto para saber a qué usuario pertenece un chirper
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    } 
}
