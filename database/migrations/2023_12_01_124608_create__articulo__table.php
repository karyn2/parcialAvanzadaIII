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
        Schema::create('articulo', function (Blueprint $table) {
            $table->string('referencia', 5);
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->string('color', 100);
            $table->float('preciounitario');
            $table->text('observacion');
            $table->string('foto', 10);
            $table->string('marca', 5);
            $table->primary('referencia');
            $table->foreign('marca')->references('idMarca')->on('marca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulo');
    }
};
