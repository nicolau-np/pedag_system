<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $cargos = "cargos";

    protected $fillable = [
        'cargo'
    ];

    public function funcionario(){
        return $this->hasMany(Funcionario::class, 'id_cargo', 'id');
    }
}