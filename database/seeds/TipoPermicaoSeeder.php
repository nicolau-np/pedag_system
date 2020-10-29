<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPermicaoSeeder extends Seeder
{
    static $permicoes = [
        "restrit 1",
        "restrit 2",
        "restrit 3",
        "all"
    ];
    public function run()
    {
        foreach (Self::$permicoes as $permicao) {
            DB::table('tipo_permicaos')->insert([
                'tipo' => $permicao
            ]);
        }
    }
}