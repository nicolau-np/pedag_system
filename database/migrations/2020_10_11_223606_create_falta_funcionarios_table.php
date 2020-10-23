<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaltaFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('falta_funcionarios', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_funcionario')->unsigned()->index();
            $table->bigInteger('id_tipo_falta')->unsigned()->index();
            $table->date('data_marcacao');
            $table->string('estado');
            $table->bigInteger('ano_lectivo');
            $table->timestamps();
        });

        Schema::table('falta_funcionarios', function (Blueprint $table) {
            $table->foreign('id_funcionario')->references('id')->on('funcionarios')->onUpdate('cascade');
            $table->foreign('id_tipo_falta')->references('id')->on('tipo_faltas')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('falta_funcionarios');
    }
}