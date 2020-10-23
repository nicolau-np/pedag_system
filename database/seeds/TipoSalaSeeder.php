<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoSalaSeeder extends Seeder
{
    static $turnos = [
        "Manhã",
        "Tarde",
        "Noite"
    ];
    public function run()
    {
        foreach(Self::$turnos as $turno){
            DB::table('turnos')->insert([
                'turno'=>$turno
            ]);
        }
    }
}