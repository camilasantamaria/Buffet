<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInsumoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('insumos', function (Blueprint $table) {
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
        Schema::table('insumos', function (Blueprint $table) {
            $table->unsignedInteger('id_categorias');
            $table->foreign('id_categorias')->references('id')->on('categorias');
            $table->unsignedInteger('id_unidads');
            $table->foreign('id_unidads')->references('id')->on('unidads');
        });
    }
}
