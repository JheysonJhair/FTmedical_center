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
        Schema::create('cita', function (Blueprint $table) {
            $table->char('idCita', 6)->primary();
            $table->string('descripcion', 90)->nullable();
            $table->char('idEstudiante', 8)->index('fk_CITA_PACIENTE1');
            $table->string('idArea', 10)->index('fk_CITA_AREA1');
            $table->date('fecha')->nullable();
            $table->time('hora')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cita');
    }
};
