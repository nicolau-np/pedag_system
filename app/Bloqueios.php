<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloqueios extends Model
{
    protected $table = "bloqueios";

    protected $fillable = [
        'epoca',
        'estado',
        'data_modificacao'
    ];
    
}