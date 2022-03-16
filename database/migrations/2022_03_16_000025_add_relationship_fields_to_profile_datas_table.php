<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProfileDatasTable extends Migration
{
    public function up()
    {
        Schema::table('profile_datas', function (Blueprint $table) {
            $table->unsignedBigInteger('profile_id')->nullable();
            $table->foreign('profile_id', 'profile_fk_6186396')->references('id')->on('profiles');
        });
    }
}
