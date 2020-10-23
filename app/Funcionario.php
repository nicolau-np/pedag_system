<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = "funcionarios";

    protected $fillable = [
        'id_pessoa',
        'id_cargo',
        'id_escalao',
        'agente',
        'estado'
    ];

    public function horario(){
        return $this->hasMany(Horario::class, 'id_funcionario', 'id');
    }

    public function director_turma(){
        return $this->hasMany(DirectorTurma::class, 'id_funcionario', 'id');
    }

    public function falta_funcionario(){
        return $this->hasMany(FaltaFuncionario::class, 'id_funcionario', 'id');
    }
    
    public function pessoa(){
        return $this->belongsTo(Pessoa::class, 'id_pessoa', 'id');
    }

    public function cargo(){
        return $this->belongsTo(Cargo::class, 'id_cargo', 'id');
    }

    public function escalao(){
        return $this->belongsTo(Escalao::class, 'id_escalao', 'id');
    }
}