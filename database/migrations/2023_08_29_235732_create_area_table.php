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
        Schema::create('area', function (Blueprint $table) {
            $table->string('idArea', 10)->primary();
            $table->string('nombre', 45);
            $table->string('tipoServicio', 45);
            $table->integer('nroPiso');
            $table->integer('nroSala');
            $table->time('horarioAtencion');
            $table->char('estado', 1)->nullable()->default('0x30');
            $table->string('descripcion', 90)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area');
    }
};
