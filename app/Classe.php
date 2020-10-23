<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table = "classes";

    protected $fillable = [
        'id_curso',
        'classe'
    ];

    public function curso(){
        return $this->belongsTo(Curso::class, 'id_curso', 'id');
    }

    public function turma(){
        return $this->hasMany(Turma::class, 'id_classe', 'id');
    }

}