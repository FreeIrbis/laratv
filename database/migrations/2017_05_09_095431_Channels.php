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
        Schema::create('channels', function (Blueprint $table) {
            /*$table->increments('id');
            $table->primary('id');*/
            $table->string('uri');
            $table->string('name_channel');
            $table->string('description_channel');
            /*$table->integer('category')->unsigned();
            $table->foreign('category')->references('id')->on('categories');*/
            $table->string('stream');
            $table->string('tv_channel');
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
