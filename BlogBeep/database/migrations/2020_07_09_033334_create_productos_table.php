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
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->String('tipo');
            $table->String('descripcion');
            $table->timestamps();
        });
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->double('telefono');
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->String('nombre');
            $table->integer('precio');
            $table->integer('cantidad');
            $table->bigInteger('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->bigInteger('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')->references('id')->on('proveedors');
            $table->String('img');
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
        Schema::dropIfExists('productos');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('proveedors');
    }
}
