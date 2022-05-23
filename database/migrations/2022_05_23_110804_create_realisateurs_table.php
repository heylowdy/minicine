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
        Schema::create('realisateurs', function (Blueprint $table) {
            $table->id();
            $table->string('prenom');
            $table->string('nom');
            $table->string('nationalite');
            $table->string('age');
            $table->string('sexe');
            $table->timestamps();
        });
        
        Schema::table('films', function (Blueprint $table) {
            $table->unsignedBigInteger('id_real');
         
            $table->foreign('id_real')->references('id')->on('realisateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('realisateurs');
    }
};
