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
        Schema::table('rol_usuario', function (Blueprint $table) {
            $table->foreign(['idRol'], 'fk_ROL_has_Usuario_ROL1')->references(['idRol'])->on('rol')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['idUsuario'], 'fk_ROL_has_Usuario_Usuario1')->references(['idUsuario'])->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rol_usuario', function (Blueprint $table) {
            $table->dropForeign('fk_ROL_has_Usuario_ROL1');
            $table->dropForeign('fk_ROL_has_Usuario_Usuario1');
        });
    }
};
