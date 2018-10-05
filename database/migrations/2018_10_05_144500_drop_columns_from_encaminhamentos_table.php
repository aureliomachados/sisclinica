<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropColumnsFromEncaminhamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('encaminhamentos', function (Blueprint $table) {
            Schema::table('encaminhamentos', function (Blueprint $table) {
                $table->dropColumn(['profissional', 'saida', 'chegada']);
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('encaminhamentos', function (Blueprint $table) {
            //
        });
    }
}
