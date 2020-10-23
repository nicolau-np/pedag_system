<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDesistenciaSeeder extends Seeder
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