<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRountinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rountines', function (Blueprint $table) {
            $table->increments('id');
            $table->char('routine_name');
            $table->integer('routine_uid');
            $table->char('routine_describe');
            $table->integer('routine_downloads');
            $table->integer('routine_logo');
            $table->integer('routine_click_rate');
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
        Schema::drop('rountines');
    }
}
