<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EpocaDiscipina extends Model
{
    protected $table = "epoca_discipinas";

    protected $fillable = [
        'tipo'
    ];

    public function dicCurso(){
        return $this->hasMany(DiscCuros::class, 'id_epoca_disciplina', 'id');
    }
}