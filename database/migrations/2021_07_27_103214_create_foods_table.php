<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments("id");

            $table->unsignedInteger("store_id");//của cửa hàng
            $table->string('food_name', 200);
            $table->tinyInteger('food_active')->default(1);//tình trạng
            $table->string('food_image', 100)->nullable();
            $table->tinyInteger('promotion')->default(0);//đang khuyến mãi không?
            $table->float("price");//giá bán trước khuyến mãi

            $table->float('food_profit')->default(0);//số tiền lợi nhuận
            $table->integer("food_consume")->default(0); //số lượng tiêu thụ
            $table->text("food_description")->nullable();

            $table->timestamps();
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
