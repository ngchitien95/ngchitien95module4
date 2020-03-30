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
            Schema::create('_comment', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('id_post');
                $table->foreign('id_post')->references('id')->on('posts');
                $table->unsignedBigInteger('id_user');
                $table->foreign('id_user')->references('id')->on('users');
                $table->longText('content');
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
        Schema::dropIfExists('comments');
    }
}
