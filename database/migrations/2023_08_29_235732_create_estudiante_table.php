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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->char('idEstudiante', 8);
            $table->string('carrera', 200)->nullable();
            $table->string('facultad', 100)->nullable();
            $table->string('semestre', 45)->nullable();
            $table->char('dni', 8)->index('fk_ESTUDIANTE_DATO1');

            $table->primary(['idEstudiante', 'dni']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
};
