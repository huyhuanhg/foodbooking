<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentPictureDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_picture_detail', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->unsignedInteger("comment_id");
            $table->unsignedInteger("comment_picture_id");
            $table->primary(['comment_id', 'comment_picture_id']);
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');
            $table->foreign('comment_picture_id')->references('id')->on('comment_picture')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_picture_detail');
    }
}
