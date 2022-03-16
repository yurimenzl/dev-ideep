<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColaboratorsTable extends Migration
{
    public function up()
    {
        Schema::create('colaborators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->string('email');
            $table->string('work_company')->nullable();
            $table->string('phone')->nullable();
            $table->string('position')->nullable();
            $table->integer('sum_positive')->nullable();
            $table->integer('sum_negative')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
