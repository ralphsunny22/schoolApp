<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('level_id')->nullable();
            $table->unsignedBigInteger('tutor_id')->nullable();
            $table->string('information_presented_in_the_course')->nullable();

            $table->string('lecturer_level_of_knowledge_of_course')->nullable();

            $table->string('lecturer_regularity_to_class')->nullable();

            $table->string('lecturer_puntuality_to_class')->nullable();

            $table->string('class_interactive_sessions')->nullable();

            $table->string('lecturer_relationship_with_the_class')->nullable();

            $table->string('recommended_learning_materials_and_handouts')->nullable();

            $table->string('future_usefulness_of_the_material_presented')->nullable();

            $table->string('cost_of_materials_given_by_the_lecturer')->nullable();

            $table->string('lecturer_delivery_of_the_lectures')->nullable();

            $table->string('nature_of_quiz')->nullable();

            $table->string('dressing_mode_of_lecturer')->nullable();

            $table->string('when_absent_from_lectures_did_he_inform_the_class_in_advance')->nullable();

            $table->string('did_the_lecturer_use_ICT_to_deliver_lectures')->nullable();

            $table->string('compared_with_other_lecturers_rate_the_lecturer')->nullable();

            $table->string('if_course_were_not_compulsory_would_you_recommed_it_to_a_friend')->nullable();

            $table->string('lecturer_sold_handout_directly_to_students')->nullable();

            $table->string('lecturer_wrote_names_of_students_who_purchased_the_handout')->nullable();

            $table->string('lecturer_demanded_some_form_of_gratification_from_the_students')->nullable();

            $table->string('lecturer_motivated_the_class_study')->nullable();
            

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
        Schema::dropIfExists('scales');
    }
}
