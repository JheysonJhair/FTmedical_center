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
        Schema::create('rol_empleado', function (Blueprint $table) {
            $table->string('idRolEmpleado', 24)->primary();
            $table->char('idRol', 10)->index('fk_ROL_has_EMPLEADO_ROL1');
            $table->char('idEMPLEADO', 10)->index('fk_ROL_has_EMPLEADO_EMPLEADO1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_empleado');
    }
};
