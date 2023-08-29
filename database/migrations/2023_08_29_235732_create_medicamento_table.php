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
        Schema::create('medicamento', function (Blueprint $table) {
            $table->char('idMedicamento', 10)->primary();
            $table->string('codigo', 36);
            $table->string('nombre', 45);
            $table->string('tipo', 45);
            $table->string('descripcion', 200)->nullable();
            $table->integer('stock');
            $table->char('idAlmacen', 10)->index('fk_MEDICAMENTO_ALMACEN1');
            $table->char('idProveedor', 10)->index('fk_MEDICAMENTO_PROVEEDOR1');
            $table->char('idReceta', 10)->index('fk_MEDICAMENTO_RECETA1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicamento');
    }
};
