<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnsinoSeeder extends Seeder
{
    static $ensinos = [
        "Primário (ini . 6)",
        "Primário & I Cíclo (7 . 9)",
        "Formação Técnico (7 . 9)",
        "Formação Técnico Profissional (10 . 12)",
        "Secundário & II Cíclo (10 .12)",
        "Formação de Professores (10 . 13)",
        "Superior"
    ];

    public function run()
    {
        foreach (Self::$ensinos as $ensino) {
            DB::table('ensinos')->insert([
                'ensino' => $ensino
            ]);
        }
    }
}