<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->increments("id");

            $table->string('email')->unique();

            $table->timestamp('email_verified_at')->nullable();
            $table->string("password", 300);
            $table->rememberToken();
            $table->timestamp("deleted_at")->nullable();

            $table->unsignedInteger("role_id");//phân quyền

            $table->string('first_name', 20);
            $table->string('last_name', 20);

            $table->char('phone', 15);
            $table->string("address")->nullable();//địa chỉ cụ thể
            $table->integer("province_code")->nullable();//mã tỉnh
            $table->integer("district_code")->nullable();//mã huyện
            $table->integer("ward_code")->nullable();//mã xã

            $table->tinyInteger('gender')->nullable();
            $table->date("birthday")->nullable();
            $table->string("avatar", 50)->nullable();
            $table->tinyInteger('active')->default(0);
            $table->text('description')->nullable();
            $table->timestamps();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
