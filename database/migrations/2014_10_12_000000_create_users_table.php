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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('f_nacimiento');
            $table->string('rol')->default('usuario');
            $table->integer('tlf_movil')->nullable();
            $table->string('localidad')->nullable();
            $table->string('provincia')->nullable();
            $table->string('calle')->nullable();
            $table->integer('piso')->nullable();
            $table->integer('cp')->nullable();
            $table->integer('descuento')->nullable();
            $table->string('password');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->rememberToken();
            $table->timestamps();

            //$table->foreignId('current_team_id')->nullable();

            $table->unsignedBigInteger('team_id')->nullable();
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
