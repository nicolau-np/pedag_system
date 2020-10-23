<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    protected $table = "estudantes";

    protected $fillable = [
        'id_pessoa',
        'id_turma',
        'estado',
        'ano_lectivo'
    ];

    public function falta_estudante()
    {
        return $this->hasMany(FaltaEstudante::class, 'id_estudante', 'id');
    }

    public function avaliacao()
    {
        return $this->hasMany(Avaliacao::class, 'id_estudante', 'id');
    }

    public function prova()
    {
        return $this->hasMany(Prova::class, 'id_estudante', 'id');
    }

    public function notas_trimestrais()
    {
        return $this->hasMany(NotaTrimestral::class, 'id_estudante', 'id');
    }

    public function nota_final()
    {
        return $this->hasMany(NotaFinal::class, 'id_estudante', 'id');
    }

    public function historico_estudante()
    {
        return $this->hasMany(HistoEstudante::class, 'id_estudante', 'id');
    }

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'id_pessoa', 'id');
    }

    public function turma()
    {
        return $this->belongsTo(Turma::class, 'id_turma', 'id');
    }
}