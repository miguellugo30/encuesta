<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_encuesta', function (Blueprint $table) {
            $table->id();
            $table->string('pregunta1')->nullable(true);
            $table->string('pregunta2')->nullable(true);
            $table->string('pregunta3')->nullable(true);
            $table->string('pregunta4')->nullable(true);
            $table->string('pregunta5')->nullable(true);
            $table->string('pregunta5-1')->nullable(true);
            $table->string('pregunta5-2')->nullable(true);
            $table->string('pregunta6')->nullable(true);
            $table->string('pregunta7')->nullable(true);
            $table->string('pregunta8')->nullable(true);
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
        Schema::dropIfExists('datos_encuesta');
    }
};
