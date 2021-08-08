<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('food_rates', function (Blueprint $table) {
//            $table->charset = 'utf8';
//            $table->collation = 'utf8_general_ci';
//            $table->unsignedInteger("food_id");
//            $table->unsignedInteger("user_id");
//            $table->char("rate", 1);
//            $table->foreign('food_id')->references('id')->on('foods');
//            $table->foreign('user_id')->references('id')->on('users');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_rates');
    }
}
