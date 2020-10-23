<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = "salas";

    protected $fillable = [
        'id_tipo_sala',
       'quant_estudantes',
       'designacao'
    ];

    public function tipo_sala(){
        return $this->belongsTo(TipoSala::class, 'id_tipo_sala', 'id');
    }
}