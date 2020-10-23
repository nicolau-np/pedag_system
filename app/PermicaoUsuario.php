<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PermicaoUsuario extends Model
{
    protected $table = "permicao_usuarios";

    protected $fillable = [
       'id_usuario',
       'id_tipo_permicao'
    ];

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
    }
    
    public function tipo_permicao(){
        return $this->belongsTo(TipoPermicao::class, 'id_tipo_permicao', 'id');
    }
}