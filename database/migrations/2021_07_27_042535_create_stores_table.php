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
            $table->string('store_name', 200);
            $table->string("store_address", 200);
            $table->char('phone_contact', 15);
            $table->unsignedInteger("store_owner");
            $table->char("avg_rate", 1)->default(0);
            $table->char("store_description", 1)->nullable();
            $table->tinyInteger("store_status")->default(1);
            $table->timestamps();
            $table->foreign('store_owner')->references('id')->on('admins')->onDelete('cascade');
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
