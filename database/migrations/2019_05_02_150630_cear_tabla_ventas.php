<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CearTablaVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
             $table->integer('codigo_venta');
           $table->biginteger('codigo_libro')->unsigned();
           $table->double('precio_unitario',7,2);
           $table->double('precio_total',7,2);
           $table->integer('cantidad');
           $table->date('fecha_venta');
           $table->primary('codigo_venta');
           $table->foreign('codigo_libro')->references('id')->on('libros');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
