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
        Schema::create('area_rol', function (Blueprint $table) {
            $table->string('idRolArea', 45)->primary();
            $table->string('idArea', 10)->index('fk_AREA_has_ROL_AREA1');
            $table->char('idRol', 10)->index('fk_AREA_has_ROL_ROL1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_rol');
    }
};
