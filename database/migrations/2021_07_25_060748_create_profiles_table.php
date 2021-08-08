<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('profiles', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('first_name', 20);
//            $table->string('last_name', 20);
//            $table->string('phone')->unique();
//            $table->string("address", 300)->nullable();
//            $table->tinyInteger('gender')->nullable();
//            $table->date("birthday")->nullable();
//            $table->string("avatar", 50)->nullable();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
