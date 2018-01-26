<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelProductoTiendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rel_producto_tienda', function (Blueprint $table) {
            $table->increments('codigo_rel_producto_tienda');
			$table->integer('codigo_producto');
			$table->integer('codigo_tienda');
			$table->decimal('precio');
			$table->enum('estado', array('ACTIVO', 'INACTIVO', 'FUERA_VENTA'));
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
        Schema::dropIfExists('rel_producto_tienda');
    }
}
