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
        Schema::create('almacen', function (Blueprint $table) {
            $table->char('idAlmacen', 10)->primary();
            $table->string('codigo', 45);
            $table->string('nombre', 45);
            $table->string('tipo', 45);
            $table->date('fechaCreacion');
            $table->date('fechaVencimiento');
            $table->string('descripcion', 100);
            $table->integer('stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('almacen');
    }
};
