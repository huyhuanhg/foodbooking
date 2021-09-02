<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->timestamp("deleted_at")->nullable();

            $table->string('store_name', 200);
            $table->string('store_not_mark', 200);

            $table->unsignedInteger('store_category');

            $table->string('store_avatar', 50)->nullable();

            $table->string("store_address")->nullable();//địa chỉ cụ thể
            $table->integer("store_province_code")->nullable();//mã tỉnh
            $table->integer("store_district_code")->nullable();//mã huyện
            $table->integer("store_ward_code")->nullable();//mã xã
            $table->string("store_specific_address")->nullable();//số nhà, đường

            $table->char('phone_contact', 15);

            $table->unsignedInteger("owner");

            $table->char("open_time", 10)->nullable();
            $table->char("close_time", 10)->nullable();
            $table->char("avg_rate", 1)->default(0);
            $table->text("store_description")->nullable();
            $table->tinyInteger("store_active")->default(1);
            $table->timestamps();
            $table->foreign('owner')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('store_category')->references('id')->on('store_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
