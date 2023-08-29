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
        Schema::table('consulta_paciente', function (Blueprint $table) {
            $table->foreign(['idPaciente'], 'fk_CONSULTA_PACIENTE_PACIENTE1')->references(['idEstudiante'])->on('estudiante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consulta_paciente', function (Blueprint $table) {
            $table->dropForeign('fk_CONSULTA_PACIENTE_PACIENTE1');
        });
    }
};
