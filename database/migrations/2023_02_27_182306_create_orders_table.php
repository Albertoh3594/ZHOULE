<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('n_pedido')->unique();
            $table->dateTime('fecha_hora_creacion');
            $table->dateTime('fecha_hora_envio')->nullable();
            //table->dateTime('fecha_hora_entregado')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('estado', 20);
            $table->timestamps();

            //$table->unsignedBigInteger('user_id');
            $table->foreignId('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
