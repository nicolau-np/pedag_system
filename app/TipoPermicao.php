<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPermicao extends Model
{
    protected $table = "tipo_permicaos";

    protected $fillable = [
        'tipo'
    ];

    public function permicao_usuario(){
        return $this->hasMany(PermicaoUsuario::class, 'id_tipo_permicao', 'id');
    }
}