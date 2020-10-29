<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSalaSeeder extends Seeder
{
    static $tipo_salas = [
        "Normal",
        "Laboratório",
        "Anexa",
        "Salão"
    ];
    public function run()
    {
        foreach(Self::$tipo_salas as $tipo_sala){
            DB::table('tipo_salas')->insert([
                'tipo'=>$tipo_sala
            ]);
        }
    }
}