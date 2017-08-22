<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCandidateContactsTable extends Migration {

    public function up()
    {
        Schema::create('candidate_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidates_id')->unsigned();
            $table->enum('type',['cell','phone','email']);
            $table->string('value');
            $table->timestamps();

            $table->foreign('candidates_id')->references('id')->on('candidates')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::drop('candidate_contacts');
    }

}