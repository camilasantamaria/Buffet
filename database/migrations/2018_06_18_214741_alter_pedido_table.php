<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pedidos', function (Blueprint $table) {
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
        Schema::table('pedidos', function (Blueprint $table) {
            $table->unsignedInteger('id_clientes');
            $table->foreign('id_clientes')->references('id')->on('clientes');
            $table->unsignedInteger('id_usuarios');
            $table->foreign('id_usuarios')->references('id')->on('usuarios');
            $table->unsignedInteger('id_est_pedidos');
            $table->foreign('id_est_pedidos')->references('id')->on('est__pedidos');
            $table->unsignedInteger('id_municipios');
            $table->foreign('id_municipios')->references('id')->on('municipios');
        });
    }
}
