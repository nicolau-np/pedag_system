<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemanaSeeder extends Seeder
{
    static $semanas = [
        "Segunda",
        "Terça",
        "Quarta",
        "Quinta",
        "Sexta"
    ];
    public function run()
    {
        foreach(Self::$semanas as $semana){
            DB::table('semanas')->insert([
                'semana'=>$semana
            ]);
        }
    }
}