<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('order_detail', function (Blueprint $table) {
//            $table->charset = 'utf8';
//            $table->collation = 'utf8_general_ci';
//            $table->unsignedInteger("order_id");
//            $table->unsignedInteger("food_id");
//            $table->float("uni_price");
//            $table->integer("quantity");
//            $table->float("discount");
//            $table->primary(array('order_id', 'food_id'));
//            $table->foreign('order_id')->references('id')->on('orders');
//            $table->foreign('food_id')->references('id')->on('foods');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_detail');
    }
}
