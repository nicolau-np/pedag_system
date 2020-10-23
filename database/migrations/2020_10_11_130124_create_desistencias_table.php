<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desistencias', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_pessoa')->unsigned()->index();
            $table->bigInteger('id_tipo_desistencia')->unsigned()->index();
            $table->text('motivo')->nullable();
            $table->date('data_desistencia');
            $table->bigInteger('ano_lectivo');
            $table->timestamps();
        });

        Schema::table('desistencias', function (Blueprint $table) {
            $table->foreign('id_pessoa')->references('id')->on('pessoas')->onUpdate('cascade');
            $table->foreign('id_tipo_desistencia')->references('id')->on('tipo_desistencias')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desistencias');
    }
}