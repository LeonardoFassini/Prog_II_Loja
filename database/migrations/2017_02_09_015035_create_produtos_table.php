<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id')->unique;
            $table->timestamps();
            $table->double('Preco', 3, 2);
            $table->string('PlacaDeVideo', 30);
            $table->string('Tipo', 20);
            $table->string('Processador', 20);
            $table->string('ram', 20);
            $table->string('Qalugou')->nullable();
            $table->string('Dono');
            $table->boolean('Disponibilidade');
            $table->foreign('Dono')->references('email')->on('users');
            $table->foreign('Qalugou')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
