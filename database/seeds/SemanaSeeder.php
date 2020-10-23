<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemanaSeeder extends Seeder
{
    static $desistencias = [
        "Transferência",
        "Desistência"
    ];
    public function run()
    {
        foreach(Self::$desistencias as $desistencia){
            DB::table('tipo_desistencias')->insert([
                'tipo'=>$desistencia
            ]);
        }
    }
}