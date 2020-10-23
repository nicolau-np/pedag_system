<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaltaFuncionario extends Model
{
    protected $table = "falta_funcionarios";

    protected $fillable = [
        'id_funcionario',
        'id_tipo_falta',
        'data_marcacao',
        'estado',
        'ano_lectivo'
    ];

    public function funcionario(){
        return $this->belongsTo(Funcionario::class, 'id_funcionario', 'id');
    }
    
    public function tipo_falta(){
        return $this->belongsTo(TipoFalta::class, 'id_tipo_falta', 'id');
    }
}