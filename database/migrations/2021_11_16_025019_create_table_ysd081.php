<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableYsd081 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_ysd081', function (Blueprint $table) {
            $table->id();
            $table->string('claPed');
            $table->biginteger('cliente');
            $table->string('razon_social');
            $table->string('descripcion_motivo');
            $table->date('fe_pref_entrg');
            $table->decimal('canPed_TM',10,2);
            $table->decimal('importe',10,2);
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
        Schema::dropIfExists('table_ysd081');
    }
}
