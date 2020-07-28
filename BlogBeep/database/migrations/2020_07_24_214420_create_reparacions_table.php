<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReparacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reparacions', function (Blueprint $table) {
            $table->id();
            $table->double('codigo');
            $table->double('telefono');
            $table->String('nombre');
            $table->String('articulo');
            $table->String('marca');
            $table->String('modelo');
            $table->String('daño');
            $table->enum('estado', ['en curso', 'terminada', 'en espera de respuesto', 'en espera de aprobacion'])->default('en curso');
            $table->String('rtaTecnico');
            $table->String('rtaUsuario');
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
        Schema::dropIfExists('reparacions');
    }
}
