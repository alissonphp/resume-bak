<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCandidateAddress extends Migration {

    public function up()
    {
        Schema::create('candidate_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidates_id')->unsigned();
            $table->string('zipcode',10)->unique();
            $table->string('pub_place');
            $table->string('number');
            $table->string('complement')->nullable();
            $table->string('neighborhood');
            $table->string('estate');
            $table->string('city');
            $table->timestamps();

            $table->foreign('candidates_id')->references('id')->on('candidates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('candidate_address');
    }

}