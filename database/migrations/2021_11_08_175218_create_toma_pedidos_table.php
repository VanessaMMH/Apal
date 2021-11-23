<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTomaPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_toma_pedidos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_creacion');
            $table->biginteger('numero_de_pedido');
            $table->string('codigo_de_cliente');
            $table->string('nombre_de_cliente');
            $table->string('direccion');
            $table->string('distrito');
            $table->string('ruta_de_campo');
            $table->string('ruta_de_llamada');
            $table->decimal('importe_de_venta');
            $table->string('usuario_inicial');
            $table->string('usuario_final');
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
        Schema::dropIfExists('table_toma_pedidos');
    }
}
