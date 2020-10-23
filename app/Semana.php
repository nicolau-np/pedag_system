<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
    protected $table = "semanas";

    protected $fillable = [
        'semana'
    ];

    public function horario(){
        return $this->hasMany(Horario::class, 'id_semana', 'id');
    }
}