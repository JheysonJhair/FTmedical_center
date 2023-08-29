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
        Schema::create('rol_usuario', function (Blueprint $table) {
            $table->char('idRolUsuario', 10)->primary();
            $table->char('idRol', 10)->index('fk_ROL_has_Usuario_ROL1');
            $table->char('idUsuario', 10)->index('fk_ROL_has_Usuario_Usuario1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_usuario');
    }
};
