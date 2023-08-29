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
        Schema::table('medicamento', function (Blueprint $table) {
            $table->foreign(['idAlmacen'], 'fk_MEDICAMENTO_ALMACEN1')->references(['idAlmacen'])->on('almacen')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['idProveedor'], 'fk_MEDICAMENTO_PROVEEDOR1')->references(['idProveedor'])->on('proveedor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['idReceta'], 'fk_MEDICAMENTO_RECETA1')->references(['idReceta'])->on('receta')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('medicamento', function (Blueprint $table) {
            $table->dropForeign('fk_MEDICAMENTO_ALMACEN1');
            $table->dropForeign('fk_MEDICAMENTO_PROVEEDOR1');
            $table->dropForeign('fk_MEDICAMENTO_RECETA1');
        });
    }
};
