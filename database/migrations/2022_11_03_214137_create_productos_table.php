<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table -> engine='InnoDB';

            $table -> increments("id");
            $table -> string("titulo",255) -> default ("Producto no identificado");

            $table -> integer("tipoProducto_id") -> unsigned();
            $table -> foreign("tipoProducto_id") -> references('id') -> on("tipo_productos");

            $table -> string("urlFoto",1000) -> nullable() -> default(null);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
