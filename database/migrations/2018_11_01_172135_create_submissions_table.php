<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('submission_time');
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
            $table->text('code');
            $table->integer('problem_id')->unsigned()->index();
            $table->foreign('problem_id')->references('id')->on('problems')->onDelete('cascade')->onUpdate('No Action');
            $table->string('verdict')->nullable();
            $table->string('cpu')->nullable();
            $table->string('memory')->nullable();
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
        Schema::dropIfExists('submissions');
    }
}
