<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpocaDisciplinaSeeder extends Seeder
{
    static $epocas = [
        "Anual",
        "1 Semestre",
        "2 Semestre"
    ];
    public function run()
    {
        foreach(Self::$epocas as $epoca){
            DB::table('epoca_discipinas')->insert([
                'tipo'=>$epoca
            ]);
        }
    }
}