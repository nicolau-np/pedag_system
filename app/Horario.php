<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = "horarios";

    protected $fillable = [
        'id_hora',
        'id_semana',
        'id_disciplina',
        'id_turma',
        'id_sala',
        'id_funcionario',
        'ano_lectivo'
    ];

    public function hora()
    {
        return $this->belongsTo(Hora::class, 'id_hora', 'id');
    }

    public function semana()
    {
        return $this->belongsTo(Semana::class, 'id_semana', 'id');
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class, 'id_disciplina', 'id');
    }

    public function turma()
    {
        return $this->belongsTo(Turma::class, 'id_turma', 'id');
    }

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class, 'id_funcionario', 'id');
    }
}