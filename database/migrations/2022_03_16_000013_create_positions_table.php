<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->longText('description');
            $table->integer('dominance');
            $table->integer('influence');
            $table->integer('stability');
            $table->integer('conformity');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
