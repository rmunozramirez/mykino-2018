<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_film', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('actor_id')->unsigned();
            $table->integer('film_id')->unsigned();;
            $table->timestamps();
        });

       Schema::table('actor_film', function($table) {
           $table->foreign('actor_id')->references('id')->on('actors');
           $table->foreign('film_id')->references('id')->on('films');
       });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('actor_film');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
