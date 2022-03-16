<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('form_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->string('characteristic');
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
