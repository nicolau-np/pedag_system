<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = "turmas";

    protected $fillable = [
        'id_curso',
        'id_classe',
        'id_turno',
       'turma'
    ];

    public function curso(){
        return $this->belongsTo(Curso::class, 'id_curso', 'id');
    }

    public function classe(){
        return $this->belongsTo(Classe::class, 'id_classe', 'id');
    }

    public function turno(){
        return $this->belongsTo(Turno::class, 'id_turno', 'id');
    }

    public function director_turma(){
        return $this->hasMany(DirectorTurma::class, 'id_turma', 'id');
    }

    public function horario(){
        return $this->hasMany(Horario::class, 'id_turma', 'id');
    }

    public function estudante(){
        return $this->hasMany(Estudante::class, 'id_turma', 'id');
    }

    public function historico_estudante(){
        return $this->hasMany(HistoEstudante::class, 'id_turma', 'id');
    }
}