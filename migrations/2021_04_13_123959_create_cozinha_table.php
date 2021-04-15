<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCozinhaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cozinha', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('hAbertura');
            $table->string('hFechamento');
            $table->string('pratoPrincipal');
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
        Schema::dropIfExists('cozinha');
    }
}