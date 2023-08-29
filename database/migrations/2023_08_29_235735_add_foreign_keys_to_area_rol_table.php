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
        Schema::table('area_rol', function (Blueprint $table) {
            $table->foreign(['idArea'], 'fk_AREA_has_ROL_AREA1')->references(['idArea'])->on('area')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['idRol'], 'fk_AREA_has_ROL_ROL1')->references(['idRol'])->on('rol')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area_rol', function (Blueprint $table) {
            $table->dropForeign('fk_AREA_has_ROL_AREA1');
            $table->dropForeign('fk_AREA_has_ROL_ROL1');
        });
    }
};
