<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->string('direccion', 150);
            $table->unsignedBigInteger('tostaduria_id');
            $table->unsignedBigInteger('ciudad_cp');
            $table->foreign('tostaduria_id')->references('id')->on('tostadurias')->onDelete('cascade');
            $table->foreign('ciudad_cp')->references('cod_postal')->on('ciudades')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursales');
    }
}
