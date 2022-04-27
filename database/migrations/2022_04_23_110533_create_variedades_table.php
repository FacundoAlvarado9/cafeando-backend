<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVariedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('variedades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->text('descripcion');
            $table->text('url');
            $table->text('external_img_url');
            $table->timestamp('published_at')->nullable();

            $table->unsignedBigInteger('tipo');
            $table->foreign('tipo')->references('id')->on('tipos');
            
            $table->unsignedBigInteger('tostaduria');
            $table->foreign('tostaduria')->references('id')->on('tostadurias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variedades');
    }
}
