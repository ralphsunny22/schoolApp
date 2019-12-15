<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');

            $table->string('reg_number')->nullable();
            $table->string('gender_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('role')->default('student');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();


            $table->string('avatar')->default('default_user.png')->nullable();
            $table->unsignedBigInteger('level_id');
            $table->unsignedBigInteger('department_id')->default(0);

            $table->unsignedBigInteger('status_id')->default(2);
            $table->string('tutor_id')->default(0);
            
            $table->string('password');

            $table->string('confirm_password')->nullable();

            $table->rememberToken();
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
