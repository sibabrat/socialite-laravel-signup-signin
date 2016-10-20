<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkedinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linkedins', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('l_id');
            $table->string('name');
            $table->string('email');
            $table->string('job');
            $table->string('industry');
            $table->string('picture');

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
        Schema::drop('linkedins');
    }
}
