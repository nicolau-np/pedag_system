<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDesistencia extends Model
{
    protected $table = "tipo_desistencias";

    protected $fillable = [
        'tipo'
    ];

    public function desistencia(){
        return $this->hasMany(Desistencia::class, 'id_tipo_desistencia', 'id');
    }
}