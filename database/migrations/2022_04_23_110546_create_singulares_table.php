<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingularesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singulares', function (Blueprint $table) {
            $table->primary('variedad_id');
            $table->unsignedBigInteger('variedad_id')->unsigned()->index();
            $table->unsignedBigInteger('origen_id');
            $table->foreign('variedad_id')->references('id')->on('variedades')->onDelete('cascade');
            $table->foreign('origen_id')->references('id')->on('origenes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('singulares');
    }
}
