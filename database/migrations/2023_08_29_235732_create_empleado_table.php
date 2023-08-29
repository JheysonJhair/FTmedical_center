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
        Schema::create('empleado', function (Blueprint $table) {
            $table->string('idEMPLEADO', 24);
            $table->string('especialidad', 45);
            $table->string('descripcion', 45)->nullable();
            $table->char('dni', 8)->index('fk_EMPLEADO_DATO1');

            $table->primary(['idEMPLEADO', 'dni']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleado');
    }
};
