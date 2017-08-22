<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCandidateEducations extends Migration {

    public function up()
    {
        Schema::create('candidate_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidates_id')->unsigned();
            $table->string('course');
            $table->string('level');
            $table->string('start');
            $table->string('finish');
            $table->timestamps();

            $table->foreign('candidates_id')->references('id')->on('candidates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('candidate_educations');
    }

}