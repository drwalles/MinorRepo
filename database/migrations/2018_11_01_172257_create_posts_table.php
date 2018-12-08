<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->string('slug', 400);
            $table->boolean('draft');
            $table->integer('thread_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->dateTime('date');
            $table->text('post');

            $table->foreign('thread_id')->references('id')->on('threads')->onDelete('cascade')->onUpdate('No Action');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
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
        Schema::dropIfExists('posts');
    }
}
