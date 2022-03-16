<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrencyPlansTable extends Migration
{
    public function up()
    {
        Schema::create('currency_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('currency');
            $table->string('type');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
