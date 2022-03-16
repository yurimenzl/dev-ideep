<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToFormAnswersTable extends Migration
{
    public function up()
    {
        Schema::table('form_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('colaborator_id')->nullable();
            $table->foreign('colaborator_id', 'colaborator_fk_6186552')->references('id')->on('colaborators');
        });
    }
}
