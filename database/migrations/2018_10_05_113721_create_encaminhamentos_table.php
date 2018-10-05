<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEncaminhamentosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encaminhamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('paciente');
            $table->string('idade');
            $table->string('endereco');
            $table->string('diagnostico');
            $table->string('profissional');
            $table->string('saida');
            $table->string('chegada');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('encaminhamentos');
    }
}
