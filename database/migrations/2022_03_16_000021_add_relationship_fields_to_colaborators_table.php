<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToColaboratorsTable extends Migration
{
    public function up()
    {
        Schema::table('colaborators', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id')->nullable();
            $table->foreign('company_id', 'company_fk_6161534')->references('id')->on('companies');
            $table->unsignedBigInteger('form_questions_id')->nullable();
            $table->foreign('form_questions_id', 'form_questions_fk_6161595')->references('id')->on('colaborators');
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_6184970')->references('id')->on('countries');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id', 'city_fk_6184971')->references('id')->on('cities');
            $table->unsignedBigInteger('profile_id')->nullable();
            $table->foreign('profile_id', 'profile_fk_6186521')->references('id')->on('profiles');
        });
    }
}
