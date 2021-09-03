<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTagDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_tag_detail', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->unsignedInteger("tag_id");
            $table->unsignedInteger("food_id");
            $table->primary(array('tag_id', 'food_id'));
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('food_tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_tag_detail');
    }
}
