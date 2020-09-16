<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityCompaniesTable extends Migration
{
    public function up()
    {
            Schema::create('city_companies', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('city_id')->unsigned();
                $table->integer('company_id')->unsigned();
    
                $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
                $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            });

    }

    public function down()
    {
        Schema::dropIfExists('city_companies');
    }
}
