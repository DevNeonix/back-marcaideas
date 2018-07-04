<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoria_id')->unsigned();
            $table->string('razon_social');
            $table->text('descripcion')->nullable();
            $table->double('lat')->nullable();
            $table->double('lon')->nullable();
            $table->string('telefono')->nullable();
            $table->time('horario_apertura')->nullable();
            $table->time('horario_cierre')->nullable();
            $table->text('redes')->nullable();
            $table->text('direccion')->nullable();
            $table->text('ubicacion')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lugares');
    }
}
