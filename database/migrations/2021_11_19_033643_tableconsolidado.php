<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tableconsolidado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_consolidado', function (Blueprint $table) {
         
            $table->biginteger('pedido');
            $table->biginteger('cliente');
            $table->string('razon_social');
            $table->string('region_distrito');
            $table->string('giro_negocio');
            $table->string('direccion');
            $table->string('distrito');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_consolidado');
    }
}
