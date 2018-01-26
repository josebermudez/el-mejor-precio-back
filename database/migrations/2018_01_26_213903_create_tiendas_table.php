<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->increments('codigo_tienda');
			$table->string('tienda_nit')->unique();
			$table->string('tienda_nombre')->nullable(false);
			$table->string('tienda_direccion')->nullable(false);
			$table->string('tienda_departamento');			
			$table->string('tienda_ciudad');
			$table->string('tienda_geo_referencia');
			$table->text('tienda_descripcion');
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
        Schema::dropIfExists('tiendas');
    }
}
