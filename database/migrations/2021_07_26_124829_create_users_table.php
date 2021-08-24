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
        Schema::create('users', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string("password", 300);
            $table->rememberToken();
            $table->string("status", 50)->nullable();
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->string('phone');
            $table->string("address", 300)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->date("birthday")->nullable();
            $table->string("avatar", 50)->nullable();
            $table->text('description')->nullable();
            $table->tinyInteger('active')->default(0);
            $table->timestamps();
        });
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
