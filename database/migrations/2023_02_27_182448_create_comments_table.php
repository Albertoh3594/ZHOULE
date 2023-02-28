<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('codigo')->unique();
            $table->string('descripcion');
            $table->date('fecha');

            //$table->unsignedBigInteger('user_id');
            //$table->unsignedBigInteger('product_id');

            $table->foreignId('user_id')->references('id')->on('users')->delete('cascade');
            $table->foreignId('product_id')->references('id')->on('products')->delete('cascade');
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
        Schema::dropIfExists('comments');
    }
}
