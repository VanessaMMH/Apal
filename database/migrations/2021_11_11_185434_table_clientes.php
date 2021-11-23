<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_clientes', function (Blueprint $table) {
            $table->id();
            $table->string('ciudad');          
            $table->string('codigo');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('distrito'); 
            $table->string('dni_ruc');
            $table->string('giro_negocio');
            $table->string('subcanal');
            $table->string('segmento'); 
            $table->string('telefono01');
            $table->string('telefono02');
            $table->string('telefono03');
            $table->string('ruta_llamada'); 
            $table->integer('dia_llamada');
            $table->string('frecuencia');
            $table->string('ruta_vista');
            $table->integer('dia_vista');
            $table->integer('frecuencia_vista');
            $table->integer('secuencia_vista');
            $table->string('longitud');
            $table->string('latitud');
            $table->date('fecha_alta');
            $table->string('cod_dist');
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
        Schema::dropIfExists('table_clientes');
    
    }
}
