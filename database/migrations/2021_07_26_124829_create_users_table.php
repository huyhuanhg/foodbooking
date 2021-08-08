<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('users', function (Blueprint $table) {
//            $table->charset = 'utf8';
//            $table->collation = 'utf8_general_ci';
//            $table->increments('id');
//            $table->string('email')->unique();
//            $table->timestamp('email_verified_at')->nullable();
//            $table->string("password", 300);
//            $table->rememberToken();
//            $table->string("status", 50)->nullable();
//            $table->unsignedInteger('profile_id');
//            $table->tinyInteger('is_register')->default(1);
//            $table->timestamps();
//            $table->foreign('profile_id')->references('id')->on('profiles')->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
