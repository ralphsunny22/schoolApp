<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('detail');
            $table->unsignedBigInteger('course_id')->index()->unsigned()->nullable();
            $table->unsignedBigInteger('type_id')->default(1);
            $table->string('option_A')->nullable();
            $table->string('option_B')->nullable();
            $table->string('option_C')->nullable();
            $table->string('option_D')->nullable();
            $table->string('option_correct')->nullable();
            $table->string('que_date')->nullable();
            $table->string('que_start_time')->nullable();
            $table->string('que_time')->nullable();
            $table->string('expected_score')->nullable();
            $table->string('student_score')->default(0);
            $table->string('image')->default('default.jpg');
            $table->unsignedBigInteger('tutor_id')->index()->unsigned()->nullable();

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
        Schema::dropIfExists('questions');
    }
}
