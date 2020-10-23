<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoEstudante extends Model
{
    protected $table = "histo_estudantes";

    protected $fillable = [
        'id_estudante',
        'id_turma',
        'estado',
        'ano_lectivo'
    ];

    public function estudante(){
        return $this->belongsTo(Estudante::class, 'id_estudante', 'id');
    }

    public function turma(){
        return $this->belongsTo(Turma::class, 'id_turma', 'id');
    }
}