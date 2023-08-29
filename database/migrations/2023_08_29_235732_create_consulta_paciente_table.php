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
        Schema::create('consulta_paciente', function (Blueprint $table) {
            $table->char('idConsulta', 10)->primary();
            $table->char('apetito', 1);
            $table->char('sed', 1);
            $table->char('sueño', 1);
            $table->char('estado_animo', 1);
            $table->string('diagnostico', 90);
            $table->string('tratamiento', 90)->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->string('observaciones', 90)->nullable();
            $table->string('examenesAuxiliares', 90)->nullable();
            $table->char('refereciaArea', 10);
            $table->char('idPaciente', 10)->index('fk_CONSULTA_PACIENTE_PACIENTE1');
            $table->dateTime('fecha')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consulta_paciente');
    }
};
