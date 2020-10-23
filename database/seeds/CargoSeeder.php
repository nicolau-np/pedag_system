<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CargoSeeder extends Seeder
{
    static $cargos = [
        "Professor Efectivo",
        "Professor Colaborador",
        "Director",
        "Sub-Director",
        "Segurança",
        "Empregada de Limpesa"
    ];

    public function run()
    {
        foreach (Self::$cargos as $cargo) {
            DB::table('cargos')->insert([
                'cargo' => $cargo
            ]);
        }
    }
}