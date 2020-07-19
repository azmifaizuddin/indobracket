<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQuestionsAndAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('question');
        });

        Schema::create('answers', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('answers');
            $table->unsignedBigInteger('question_id')->nullable(); //Buat Menghubugkan pertanyaan dan jawaban
            $table->foreign('question_id')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
