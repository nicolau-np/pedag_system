<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoEscalaoSeeder extends Seeder
{
    static $escaloes = [
        "PEPD 6º E",
        "PIICESD 6º E",
        "PEPAUX 6º E",
        "PICESD 6º E",
        "PIICESD 8º E",
        "PIICESD 7º E",
        "PEPD 5º E",
        "PICESD 5º E"
    ];
    public function run()
    {
        foreach(Self::$escaloes as $escalao){
            DB::table('escalaos')->insert([
                'escalao'=>$escalao
            ]);
        }
    }
}