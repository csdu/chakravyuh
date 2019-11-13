<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_attachments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unSignedBigInteger('question_id');
            $table->string('path');
            $table->enum('type', ['image', 'audio', 'video']);
            $table->timestamps();
            
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
        Schema::dropIfExists('question_attachments');
    }
}
