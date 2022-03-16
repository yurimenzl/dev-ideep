<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestSendsTable extends Migration
{
    public function up()
    {
        Schema::create('test_sends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
