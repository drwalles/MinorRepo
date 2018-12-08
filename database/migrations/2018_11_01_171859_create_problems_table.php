<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('problem_name');
            $table->text('problem_description');
            $table->string('problem_setter');
            $table->integer('total_solved');
            $table->integer('total_submission');
            $table->integer('problem_tag')->unsigned()->index();
            $table->foreign('problem_tag')->references('id')->on('tags')->onDelete('cascade')->onUpdate('No Action');
            $table->integer('time_limit');
            $table->integer('memory_limit');
            $table->text('sample_input');
            $table->text('sample_output');
            $table->text('tc_input');
            $table->text('tc_output');
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
        Schema::dropIfExists('problems');
    }
}
