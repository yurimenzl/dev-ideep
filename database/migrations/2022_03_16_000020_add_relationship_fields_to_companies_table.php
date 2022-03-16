<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCompaniesTable extends Migration
{
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_6186376')->references('id')->on('countries');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id', 'city_fk_6186377')->references('id')->on('cities');
            $table->unsignedBigInteger('plan_type_id')->nullable();
            $table->foreign('plan_type_id', 'plan_type_fk_6186515')->references('id')->on('currency_plans');
        });
    }
}
