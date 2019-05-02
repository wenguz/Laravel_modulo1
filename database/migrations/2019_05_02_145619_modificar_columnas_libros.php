<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModificarColumnasLibros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('libros', function (Blueprint $table) {
            $table->string('autor',70)->change();
            $table->renameColumn('titulo','titulo_libro');
            $table->dropColumn('codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('libros', function (Blueprint $table) {
            //
        });
    }
}
