<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "cursos";

    protected $fillable = [
        'id_ensino',
        'curso'
    ];

    public function ensino(){
        return $this->belongsTo(Ensino::class, 'id_ensino', 'id');
    }
    
    public function turma(){
        return $this->hasMany(Turma::class, 'id_curso', 'id');
    }
}