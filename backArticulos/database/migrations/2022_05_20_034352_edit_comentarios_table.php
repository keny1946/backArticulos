<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->unsignedBigInteger('idUser')->after('descripcion_comentario');
            $table->unsignedBigInteger('idArticulo');
            $table->foreign('idUser')->references('id')->on('users');
            $table->foreign('idArticulo')->references('id')->on('articulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            //
        });
    }
};
