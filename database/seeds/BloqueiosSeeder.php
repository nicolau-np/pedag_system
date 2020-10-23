<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BloqueiosSeeder extends Seeder
{
    static $bloqueios = [
        [
            'epoca'=>"1 Trimestre",
            'estado'=>"off"
        ],
        [
           'epoca'=>"2 Trimestre",
           'estado'=>"off"
       ],
       [
           'epoca'=>"3 Trimestre",
           'estado'=>"off"
       ],
       [
           'epoca'=>"Final",
           'estado'=>"off"
       ],
    ];
   public function run()
   {
       foreach(Self::$bloqueios as $bloqueio){
           DB::table('bloqueios')->insert(
               $bloqueio
           );
       }
   }
}