<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableYsd080 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_ysd080', function (Blueprint $table) {
            $table->id();
            $table->biginteger('pedido');
            $table->date('fecha_creacion');
            $table->string('cliente');
            $table->string('razon_social');
            $table->integer('can_ped');
            $table->decimal('can_ped_tm', 10, 3);
            $table->decimal('importe');
            $table->string('region_distrito');
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
        Schema::dropIfExists('table_ysd080');
    }
}
