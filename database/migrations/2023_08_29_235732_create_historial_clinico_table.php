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
        Schema::create('historial_clinico', function (Blueprint $table) {
            $table->char('idHistorial', 10);
            $table->integer('numero');
            $table->string('diagnostico', 90);
            $table->string('tratamiento', 90);
            $table->string('recomendaciones', 90);
            $table->string('idFecha', 10);
            $table->char('idEstudiante', 8)->index('fk_HISTORIAL_CLINICO_PACIENTE1');
            $table->dateTime('fecha');

            $table->primary(['idHistorial', 'idFecha', 'idEstudiante']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_clinico');
    }
};
