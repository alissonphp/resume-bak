<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCandidatePersonalInfosTable extends Migration {

    public function up()
    {
        Schema::create('candidate_personal_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidates_id')->unsigned();
            $table->string('rg',60)->unique();
            $table->string('rg_org_exp');
            $table->date('rg_date_exp');
            $table->string('father')->nullable();
            $table->string('mother');
            $table->date('birth');
            $table->enum('genre',['male','female'])->nullable();
            $table->string('marital_status');
            $table->timestamps();

            $table->foreign('candidates_id')->references('id')->on('candidates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('candidate_personal_infos');
    }

}