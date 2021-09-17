<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * tài khoản khách mua hàng
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments('id');
            //email: tài khoản đăng nhập
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string("password", 300);
            $table->rememberToken();
            $table->timestamp("deleted_at")->nullable();
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->char('phone', 15);
            $table->string("address")->nullable();//địa chỉ cụ thể
            $table->integer("province_code")->nullable();//mã tỉnh
            $table->integer("district_code")->nullable();//mã huyện
            $table->integer("ward_code")->nullable();//mã xã

            $table->tinyInteger('gender')->nullable();
            $table->date("birthday")->nullable();
            $table->string("avatar", 100)->nullable();
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
