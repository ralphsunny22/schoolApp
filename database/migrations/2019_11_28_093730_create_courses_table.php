<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('course_code')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('detail')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('semester_id')->nullable();
            
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('periods')->default(0);
            $table->string('duration_per_period')->nullable();
            $table->string('total_duration')->nullable();
            $table->string('is_practical')->default(0);
            
            $table->string('total_seats')->nullable();
            $table->string('image')->default('course.png');
            $table->unsignedBigInteger('status_id')->default(1);;
            $table->unsignedBigInteger('tutor_id')->nullable();
            $table->string('rating_times')->default(1);
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
        Schema::dropIfExists('courses');
    }
}
