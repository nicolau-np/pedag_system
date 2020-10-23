<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desistencia extends Model
{
    protected $table = "desistencias";

    protected $fillable = [
        'id_pessoa',
        'id_tipo_desistencia',
        'motivo',
        'data_desistencia',
        'ano_lectivo'
    ];
    
    public function pessoa(){
        return $this->belongsTo(Pessoa::class, 'id_pessoa', 'id');
    }

    public function tipo_desistencia(){
        return $this->belongsTo(TipoDesistencia::class, 'id_tipo_desistencia', 'id');
    }
}