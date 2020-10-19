<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesfksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_recolectores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            //
            $table->boolean('lunes');
            $table->boolean('martes');
            $table->boolean('miercoles');
            $table->boolean('jueves');
            $table->boolean('viernes');
            $table->boolean('sabado');
            $table->boolean('domingo');
            //
            $table->timestamps();
        });
        
        Schema::create('m_p_r_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('direccion');
            $table->string('tipodebasura');
            $table->time('horaapertura');
            $table->time('horacierre');
            $table->timestamps();
        });
        
        Schema::create('detallesfks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idrec');
            $table->foreign('idrec')->references('id')->on('m_recolectores');//clave foraneas
            $table->unsignedBigInteger('idpr');
            $table->foreign('idpr')->references('id')->on('m_p_r_s');//clave foraneas
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
        Schema::dropIfExists('m_recolectores');
        Schema::dropIfExists('detallesfks');
        Schema::dropIfExists('m_p_r_s');
    }
}
