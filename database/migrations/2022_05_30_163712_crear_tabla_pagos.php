<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->integer('metodo');
            $table->decimal('monto', 5, 2);
            $table->integer('comision');
            $table->decimal('total', 5, 2);
            $table->integer('concepto');
            $table->unsignedBigInteger('usuarios_id');
            $table->foreign('usuarios_id', 'fk_pago_usuario')->references('id')->on('usuarios')->onDelete('cascade')->onUpdate('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
