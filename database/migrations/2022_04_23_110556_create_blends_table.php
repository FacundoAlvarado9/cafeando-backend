<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blends', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('variedad_id');
            $table->unsignedBigInteger('origen_id');
            $table->foreign('variedad_id')->references('id')->on('variedades')->onDelete('cascade');
            $table->foreign('origen_id')->references('id')->on('origenes')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blends');
    }
}
