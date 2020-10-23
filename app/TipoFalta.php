<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoFalta extends Model
{
    protected $table = "tipo_faltas";

    protected $fillable = [
        'tipo'
    ];

    public function falta_estudante(){
        return $this->hasMany(FaltaEstudante::class, 'id_tipo_falta', 'id');
    }

    public function falta_funcionario(){
        return $this->hasMany(FaltaFuncionario::class, 'id_tipo_falta', 'id');
    }
}