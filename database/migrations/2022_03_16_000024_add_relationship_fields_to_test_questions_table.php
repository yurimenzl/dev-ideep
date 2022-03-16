<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTestQuestionsTable extends Migration
{
    public function up()
    {
        Schema::table('test_questions', function (Blueprint $table) {
            $table->unsignedBigInteger('test_id')->nullable();
            $table->foreign('test_id', 'test_fk_6161891')->references('id')->on('tests');
        });
    }
}
