<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lines', function (Blueprint $table) {
            $table->id();

            //table->unsignedBigInteger('order_id');
            //$table->unsignedBigInteger('product_id');

            $table->float('price', 4, 2);
            $table->integer('amount');

            $table->foreignId('order_id')->references('id')->on('orders')->delete('cascade');
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
        Schema::dropIfExists('order_lines');
    }
}
