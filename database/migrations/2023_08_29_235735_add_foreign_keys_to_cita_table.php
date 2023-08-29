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
        Schema::table('cita', function (Blueprint $table) {
            $table->foreign(['idArea'], 'fk_CITA_AREA1')->references(['idArea'])->on('area')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['idEstudiante'], 'fk_CITA_PACIENTE1')->references(['idEstudiante'])->on('estudiante')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cita', function (Blueprint $table) {
            $table->dropForeign('fk_CITA_AREA1');
            $table->dropForeign('fk_CITA_PACIENTE1');
        });
    }
};
