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
        Schema::create('dato', function (Blueprint $table) {
            $table->char('dni', 8)->primary();
            $table->string('nombre', 45);
            $table->string('apellidos', 90);
            $table->string('correo', 45);
            $table->date('fechaNacimiento');
            $table->string('celular', 12);
            $table->string('direccion', 90);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dato');
    }
};
