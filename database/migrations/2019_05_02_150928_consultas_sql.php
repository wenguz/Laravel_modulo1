<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConsultasSql extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
          'create table libros2(
           id bigint,
           autor varchar(150),
           titulov varchar(150),
           precio double(7,2),
           cantidad int,
           primary key (id)
          );'
      );
      DB::statement(
          'create table ventas2(
              codigo_venta int,
              codigo_libro bigint,
              preci_unitario double(7,2),
              pecio_total double(7,2),
              cantidad int,
              fecha_venta date,
              primary key (codigo_venta),
              FOREIGN KEY (codigo_libro) REFERENCES libros2(id)
          );'
      );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
