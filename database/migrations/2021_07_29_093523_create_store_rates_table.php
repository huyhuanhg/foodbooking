<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('store_rates', function (Blueprint $table) {
//            $table->charset = 'utf8';
//            $table->collation = 'utf8_general_ci';
//            $table->unsignedInteger("store_id");
//            $table->unsignedInteger("person_id");
//            $table->char("rate", 1);
//            $table->foreign('store_id')->references('id')->on('stores');
//            $table->foreign('person_id')->references('id')->on('persons');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_rates');
    }
}
