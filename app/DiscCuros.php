<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscCuros extends Model
{
    protected $table = "disc_curos";

    protected $fillable = [
        'id_curso',
        'id_disciplina',
        'id_classe',
        'id_epoca_disciplina'
    ];

    public function curso(){
        return $this->belongsTo(Curso::class, 'id_curso', 'id');
    }
    
    public function disciplina(){
        return $this->belongsTo(Disciplina::class, 'id_disciplina', 'id');
    }

    public function classe(){
        return $this->belongsTo(Classe::class, 'id_classe', 'id');
    }

    public function epoca_disciplina(){
        return $this->belongsTo(EpocaDiscipina::class, 'id_epoca_disciplina', 'id');
    }
}