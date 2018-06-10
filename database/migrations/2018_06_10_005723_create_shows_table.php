<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->integer('lineup_id')->unsigned();
            $table->foreign('lineup_id')->references('id')->on('lineups');
            $table->integer('venue_id')->unsigned();            
            $table->foreign('venue_id')->references('id')->on('venues');            
            $table->timestamps();
        });

        Schema::table('lineups', function (Blueprint $table) {
            $table->integer('show_id')->unsigned();
            $table->foreign('show_id')->references('id')->on('shows');
            $table->integer('artist_id')->unsigned();
            $table->foreign('artist_id')->references('id')->on('artists');
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
        Schema::dropIfExists('shows');
    }
}
