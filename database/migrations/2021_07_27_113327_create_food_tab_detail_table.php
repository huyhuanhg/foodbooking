<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTabDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_tab_detail', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->unsignedInteger("tab_id");
            $table->unsignedInteger("food_id");
            $table->primary(array('tab_id', 'food_id'));
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->foreign('tab_id')->references('id')->on('food_tabs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_tab_detail');
    }
}
