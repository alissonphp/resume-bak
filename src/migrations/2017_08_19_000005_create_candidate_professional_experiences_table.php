<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCandidateProfessionalExperiencesTable extends Migration {

    public function up()
    {
        Schema::create('candidate_professional_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidates_id')->unsigned();
            $table->string('company');
            $table->string('position');
            $table->string('admission');
            $table->string('resignation');
            $table->timestamps();

            $table->foreign('candidates_id')->references('id')->on('candidates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('candidate_professional_experiences');
    }

}