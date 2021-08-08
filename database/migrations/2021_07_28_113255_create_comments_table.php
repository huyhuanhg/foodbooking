<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('comments', function (Blueprint $table) {
//            $table->charset = 'utf8';
//            $table->collation = 'utf8_general_ci';
//            $table->unsignedInteger("food_id");
//            $table->unsignedInteger("person_id");
//            $table->timestamp("create_at");
//            $table->text("content");
//            $table->foreign('food_id')->references('id')->on('foods');
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
        Schema::dropIfExists('comments');
    }
}
