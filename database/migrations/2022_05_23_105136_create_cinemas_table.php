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
        Schema::create('cinemas', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('rue');
            $table->string('ville');
            $table->string('code_postal');
            $table->string('tel');
            $table->timestamps();
        });

        Schema::table('salles', function (Blueprint $table) {
            $table->unsignedBigInteger('cinema_id');
         
            $table->foreign('cinema_id')->references('id')->on('cinemas');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cinemas');
    }
};
