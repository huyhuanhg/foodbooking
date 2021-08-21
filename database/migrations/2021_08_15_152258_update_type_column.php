<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTypeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        demo
//        Schema::table('stores', function ($table) {
//            $table->text('store_description')->change();
//        });

//        if (Schema::hasTable('users')) {
//            Schema::table('users', function (Blueprint $table) {
//                if (Schema::hasColumn('users', 'active')) {
//                    $table->integer('active')->default(0);
//                }
//            });
//        }

//        DB::statement('ALTER TABLE orders MODIFY order_status  TINYINT;');
        DB::statement('ALTER TABLE `orders` CHANGE COLUMN `order_status` `order_status` TINYINT NOT NULL DEFAULT 0;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
