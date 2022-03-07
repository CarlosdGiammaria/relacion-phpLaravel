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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_ficha');
            $table->string('coordinacion');
            $table->string('f_inicio');
            $table->string('f_fin');

          //  $table->foreignId('id_ficha')->references('id')->on('fichas');

     /*$table->foreignId('id_ficha')
      ->nullable()
      ->constrained('fichas')
      ->cascadeOnUpdate()
      ->nullonDelete();*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichas');
    }
};
