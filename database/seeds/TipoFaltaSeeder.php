<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoFaltaSeeder extends Seeder
{
    static $faltas = [
        "Normal",
        "Indisciplinar"
    ];
    public function run()
    {
        foreach (Self::$faltas as $falta) {
            DB::table('tipo_faltas')->insert([
                'tipo' => $falta
            ]);
        }
    }
}