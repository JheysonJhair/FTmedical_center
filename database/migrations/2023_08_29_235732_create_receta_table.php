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
        Schema::create('receta', function (Blueprint $table) {
            $table->char('idReceta', 10);
            $table->integer('numero');
            $table->string('descripcion', 100)->nullable();
            $table->string('idFecha', 10);
            $table->char('idEstudiante', 8)->index('fk_RECETA_PACIENTE1');
            $table->dateTime('fecha')->nullable();

            $table->primary(['idReceta', 'idFecha']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receta');
    }
};
