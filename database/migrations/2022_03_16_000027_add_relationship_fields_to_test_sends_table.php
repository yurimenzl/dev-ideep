<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTestSendsTable extends Migration
{
    public function up()
    {
        Schema::table('test_sends', function (Blueprint $table) {
            $table->unsignedBigInteger('colaborator_id')->nullable();
            $table->foreign('colaborator_id', 'colaborator_fk_6186599')->references('id')->on('colaborators');
            $table->unsignedBigInteger('test_id')->nullable();
            $table->foreign('test_id', 'test_fk_6186600')->references('id')->on('tests');
        });
    }
}
