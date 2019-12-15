<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScalingTutorsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {


        
        return [
            //
            'user_id' => 'nullable',
            'course_id' => 'nullable',
            'level_id' => 'nullable',
            'tutor_id' => 'nullable',
            'information_presented_in_the_course' => 'nullable',

            'lecturer_level_of_knowledge_of_course' => 'nullable',

            'lecturer_regularity_to_class' => 'nullable',

            'lecturer_puntuality_to_class' => 'nullable',

            'class_interactive_sessions' => 'nullable',

            'lecturer_relationship_with_the_class' => 'nullable',

            'recommended_learning_materials_and_handouts' => 'nullable',

            'future_usefulness_of_the_material_presented' => 'nullable',

            'cost_of_materials_given_by_the_lecturer' => 'nullable',

            'lecturer_delivery_of_the_lectures' => 'nullable',

            'nature_of_quiz' => 'nullable',

            'dressing_mode_of_lecturer' => 'nullable',

            'when_absent_from_lectures_did_he_inform_the_class_in_advance' => 'nullable',

            'did_the_lecturer_use_ICT_to_deliver_lectures' => 'nullable',

            'compared_with_other_lecturers_rate_the_lecturer' => 'nullable',

            'if_course_were_not_compulsory_would_you_recommed_it_to_a_friend' => 'nullable',

            'lecturer_sold_handout_directly_to_students' => 'nullable',

           'lecturer_wrote_names_of_students_who_purchased_the_handout' => 'nullable',

            'lecturer_demanded_some_form_of_gratification_from_the_students' => 'nullable',

           'lecturer_motivated_the_class_study' => 'nullable',
        ];
    }
}
