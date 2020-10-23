<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermicaoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permicao_usuarios', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->bigInteger('id_usuario')->unsigned()->index();
            $table->bigInteger('id_tipo_permicao')->unsigned()->index();
            $table->timestamps();
        });

        Schema::table('permicao_usuarios', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onUpdate('cascade');
            $table->foreign('id_tipo_permicao')->references('id')->on('tipo_permicaos')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permicao_usuarios');
    }
}