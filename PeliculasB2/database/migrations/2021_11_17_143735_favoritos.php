<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Favoritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('Id_User');
            $table->string('ImdbID');
            $table->foreign('Id_User')->references('id')->on('users');
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
        Schema::dropIfExists('favoritos');
    }
}
