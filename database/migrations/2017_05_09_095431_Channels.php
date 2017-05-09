<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Channels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function ($table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('uri');
            $table->string('name_channel');
            $table->string('description_channel');
            $table->integer('category')->unsigned();
            $table->string('stream');
            $table->string('tv_channel');
            $table->timestamps();
        });

        Schema::table('channels', function($table){

            $table->foreign('category')->references('id')->on('categories');
        });

        }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('channels');
    }
}
