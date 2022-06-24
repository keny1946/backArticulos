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
        Schema::table('articulo', function (Blueprint $table) {
            $table->unsignedBigInteger('idEstadoArticulo');
            $table->foreign('idEstadoArticulo')->references('id')->on('estado_articulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articulo', function (Blueprint $table) {
            //
        });
    }
};
