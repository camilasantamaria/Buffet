<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->unsignedInteger('id_tipo_documentos');
            $table->foreign('id_tipo_documentos')->references('id')->on('tipo_documentos');

            $table->unsignedInteger('id_municipios');
            $table->foreign('id_municipios')->references('id')->on('municipios');



        });
    }
}
