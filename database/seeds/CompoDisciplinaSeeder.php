<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompoDisciplinaSeeder extends Seeder
{
    static $componentes = [
        "Socio Cultural",
        "Científica",
        "Formação Específica",
        "Formação Geral"
     ];
     
    public function run(){
    
      foreach(Self::$componentes as $componente){
          DB::table('compo_disciplinas')->insert([
              'componente'=>$componente
          ]);
      }
    }
}