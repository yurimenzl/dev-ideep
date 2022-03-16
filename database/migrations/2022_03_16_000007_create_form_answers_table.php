<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('form_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('question_number');
            $table->string('question_plus');
            $table->string('question_minus');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
