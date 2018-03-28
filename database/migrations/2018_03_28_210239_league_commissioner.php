<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LeagueCommissioner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_commissioners', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('league_id');
            $table->unsignedInteger('user_id');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('league_id')->references('id')->on('league')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('league_commissioners');
    }
}
