<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaltaEstudante extends Model
{
    protected $table = "falta_estudantes";
    
    protected $fillable = [
        'id_estudante',
        'id_disciplina',
        'id_tipo_falta',
        'data_marcacao',
        'estado',
       'ano_lectivo'
    ];

    public function estudante(){
        return $this->belongsTo(Estudante::class, 'id_estudante', 'id');
    }

    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'id_disciplina', 'id');
    }

    public function tipo_falta(){
        return $this->belongsTo(TipoFalta::class, 'id_tipo_falta', 'id');
    }

}