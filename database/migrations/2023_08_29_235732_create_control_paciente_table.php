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
        Schema::create('control_paciente', function (Blueprint $table) {
            $table->char('idControl', 10)->primary();
            $table->string('examenFisico', 90);
            $table->decimal('temperatura', 10, 0);
            $table->string('PA', 45);
            $table->string('FC', 45)->nullable();
            $table->string('FR', 45)->nullable();
            $table->decimal('peso', 10, 0);
            $table->decimal('talla', 10, 0);
            $table->string('IMC', 45)->nullable();
            $table->char('idEstudiante', 8)->index('fk_CONTROL_PACIENTE_PACIENTE1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('control_paciente');
    }
};
