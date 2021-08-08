<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodPictureDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('food_picture_detail', function (Blueprint $table) {
//            $table->charset = 'utf8';
//            $table->collation = 'utf8_general_ci';
//            $table->unsignedInteger("food_id");
//            $table->unsignedInteger("food_picture_id");
//            $table->primary(['food_id', 'food_picture_id']);
//            $table->foreign('food_id')->references('id')->on('foods');
//            $table->foreign('food_picture_id')->references('id')->on('food_picture');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_picture_detail');
    }
}
