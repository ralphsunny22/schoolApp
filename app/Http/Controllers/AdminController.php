<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;
use App\Course;
use App\Question;
use App\User;
use App\Tutor;
use Carbon\Carbon;
use DateTime;
use App\Scale;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deanDashboard($id)
    {
        $tutor = Tutor::find($id);
        $tutor_id = $tutor->id;
         $tutor->department;

        $tutors = Tutor::where('status_id',2)->where('department_id',1)->orWhere('department_id',2)->get();
        $courses = Course::all();

        $tutor_count = Tutor::where('id', $tutor->id)->get();
        if((count($tutor_count) > 0) && ($tutor->status_id === 1)){
  
        // if(($tutor->id > 0) && ($tutor->status->name === 'Active')){
            return view('admin.deanDashboard', compact('tutor', 'tutors', 'courses', 'tutor_id'));
        } else {
            return view('404');
        }
        
    }




public function performanceProfile($id){

 $tutor = Tutor::find($id);



$scale_tutor = Scale::where('tutor_id', $tutor->id)->first();
 
//$scale_tutor->course->name;
 //$tutor_course = Scale::where('course_id', $scale_tutor->course_id)->first();

    $lecturer_value1 = Scale::where('tutor_id', $tutor->id)->sum('information_presented_in_the_course');

    $lecturer_value2 = Scale::where('tutor_id', $tutor->id)->sum('lecturer_level_of_knowledge_of_course');

    $lecturer_value3 = Scale::where('tutor_id', $tutor->id)->sum('lecturer_regularity_to_class');

    $lecturer_value4 = Scale::where('tutor_id', $tutor->id)->sum('lecturer_puntuality_to_class');

    $lecturer_value5 = Scale::where('tutor_id', $tutor->id)->sum('class_interactive_sessions');

    $lecturer_value6 = Scale::where('tutor_id', $tutor->id)->sum('lecturer_relationship_with_the_class');

    $lecturer_value7 = Scale::where('tutor_id', $tutor->id)->sum('recommended_learning_materials_and_handouts');

    $lecturer_value8 = Scale::where('tutor_id', $tutor->id)->sum('future_usefulness_of_the_material_presented');

    $lecturer_value9 = Scale::where('tutor_id', $tutor->id)->sum('cost_of_materials_given_by_the_lecturer');

    $lecturer_value10 = Scale::where('tutor_id', $tutor->id)->sum('lecturer_delivery_of_the_lectures');

    $lecturer_value11 = Scale::where('tutor_id', $tutor->id)->sum('nature_of_quiz');

    $lecturer_value12 = Scale::where('tutor_id', $tutor->id)->sum('dressing_mode_of_lecturer');

    $lecturer_value13 = Scale::where('tutor_id', $tutor->id)->sum('when_absent_from_lectures_did_he_inform_the_class_in_advance');

    $lecturer_value14 = Scale::where('tutor_id', $tutor->id)->sum('did_the_lecturer_use_ICT_to_deliver_lectures');

    $lecturer_value15 = Scale::where('tutor_id', $tutor->id)->sum('compared_with_other_lecturers_rate_the_lecturer');

    $lecturer_value16 = Scale::where('tutor_id', $tutor->id)->sum('if_course_were_not_compulsory_would_you_recommed_it_to_a_friend');

    $lecturer_value17 = Scale::where('tutor_id', $tutor->id)->sum('lecturer_sold_handout_directly_to_students');

    $lecturer_value18 = Scale::where('tutor_id', $tutor->id)->sum('lecturer_wrote_names_of_students_who_purchased_the_handout');

    $lecturer_value19 = Scale::where('tutor_id', $tutor->id)->sum('lecturer_demanded_some_form_of_gratification_from_the_students');

    $lecturer_value20 = Scale::where('tutor_id', $tutor->id)->sum('lecturer_motivated_the_class_study'); 


    $total_pt = $lecturer_value1 + $lecturer_value2 + $lecturer_value3 + $lecturer_value4 + $lecturer_value5 + $lecturer_value6 + 
                $lecturer_value7 + $lecturer_value8 + $lecturer_value9 + $lecturer_value10 + $lecturer_value11 + $lecturer_value12 +
                $lecturer_value13 + $lecturer_value14 + $lecturer_value15 + $lecturer_value16 + $lecturer_value17 + $lecturer_value18 +
                $lecturer_value19 + $lecturer_value20;

    //per pt score
    $per_pt_score = 5;

    //count the number of times, the tutor was rated
    $scale_tutor_get = Scale::where('tutor_id', $tutor->id)->get(); 
    $scale_tutor_count = count($scale_tutor_get);

    //get the numba of users that participated
    $course_periods = $scale_tutor->course->periods;
    $number_of_users_that_participated = ceil($scale_tutor_count);

   

   // $last_names = array_column($a, 'last_name', 'id');//for testing

    //get the expected total score, the Lecturer shld get frm the rating
    $column_count = count(Schema::getColumnListing('scales')) - 7;
    $expected_score = $per_pt_score * $scale_tutor_count * $column_count;

    //calculating users total score
    $users_score_value = \App\Score::where('course_id', $scale_tutor->course_id)->sum('value');
    $question_value = Question::where('course_id', $scale_tutor->course_id)->firstOrFail();
    $expected_user_score_value = $question_value->expected_score;

    $user_score_get = \App\Score::where('course_id', $scale_tutor->course_id)->get();
    $user_score_count = count($user_score_get);

    $users_final_expected_score = $expected_user_score_value * $user_score_count;
    $users_percentage_score = ($users_score_value * 100) / ($users_final_expected_score);



//get the percentage score of the Lecturer. Affected by the students performance index
   $tutor_percentage_value = ($total_pt * 100) / ($expected_score);

   $tutorAveragePercentage = ($users_percentage_score + $tutor_percentage_value) / 2;


    return view('admin.performanceProfile', compact('tutor', 'lecturer_value1', 'lecturer_value2', 'lecturer_value3', 'lecturer_value4', 'lecturer_value5',
                                                'lecturer_value6', 'lecturer_value7', 'lecturer_value8', 'lecturer_value9', 'lecturer_value10',
                                                'lecturer_value11', 'lecturer_value12', 'lecturer_value13', 'lecturer_value14', 'lecturer_value15',
                                                'lecturer_value16', 'lecturer_value17', 'lecturer_value18', 'lecturer_value19', 'lecturer_value20', 
                                                'total_pt', 'expected_score', 'tutorAveragePercentage', 'number_of_users_that_participated'));

    }







public function adminDashboard($id)
    {
        $tutor = Tutor::find($id);

        $tutor_count = Tutor::where('id', $tutor->id)->get();
        if((count($tutor_count) > 0) && ($tutor->status_id === 2)){
  
        //count tutor courses
        $tutor_courses = Course::where('tutor_id',$tutor->id)->get();
        $tutor_courses_count = count($tutor_courses);

        //count tutor students
        $tutor_students = User::where('department_id',$tutor->department_id)->get();
        $tutor_students_count = count($tutor_students); 

        //count tutor personal students
        $tutor_personal_students = User::where('tutor_id',$tutor->id)->get();
        $tutor_personal_students_count = count($tutor_personal_students); 

        // $user_staff_adviser_id = \App\User::where('tutor_id', $student->tutor_id)->get();
        // $user_staff_adviser_list = \App\User::where('tutor_id', $student->tutor_id)->first();
        
         //count tutor questions
         $tutor_questions = Question::where('tutor_id',$tutor->id)->get();
         $tutor_questions_count = count($tutor_questions);

//on the footer section of student's table on tutor's dashboard
$tutor_students_level_yr1 = User::where('department_id',$tutor->department_id)->where('level_id',1)->get();
$tutor_students_level_yr1_count = count($tutor_students_level_yr1);

$tutor_students_level_yr2 = User::where('department_id',$tutor->department_id)->where('level_id',2)->get();
$tutor_students_level_yr2_count = count($tutor_students_level_yr2);

$tutor_students_level_yr3 = User::where('department_id',$tutor->department_id)->where('level_id',3)->get();
$tutor_students_level_yr3_count = count($tutor_students_level_yr3);

$tutor_students_level_yr4 = User::where('department_id',$tutor->department_id)->where('level_id',4)->get();
$tutor_students_level_yr4_count = count($tutor_students_level_yr4);


            return view('admin.dashboard', compact('tutor', 'tutor_courses_count', 'tutor_questions_count', 'tutor_students_count', 'tutor_personal_students_count', 
                        'tutor_students', 'tutor_courses', 'tutor_questions', 'tutor_personal_students', 
                        'tutor_students_level_yr1_count', 'tutor_students_level_yr2_count', 'tutor_students_level_yr3_count', 'tutor_students_level_yr4_count'));
        } else {
            return redirect()->route('deanDashboard', [$tutor->id])->with('success', 'Logged in Successfully as Dean');
        }
        
    }


//QUESTIONS PER COURSE
    public function adminQuestionsPerCourse($id){

        $course = Course::find($id);
        $tutor = Tutor::where('id', $course->tutor->id)->firstOrFail();
        $questions = Question::where('course_id', $course->id)->get();
        $questions_count = $questions->count();
        return view('admin.questions.questions_per_course', compact('questions', 'course', 'questions_count', 'tutor'));

    }







//ADMIN STUDENT INFO/PROFILE
public function adminStudentInfo($id){

    $user = User::find($id);
    $score_user_get = \App\Score::where('user_id', $user->id)->get();

    if(count($score_user_get)){

        $score_user = \App\Score::where('user_id', $user->id)->firstOrFail();
        $user_score_value = \App\Score::where('user_id', $user->id)->where('course_id', $score_user->course_id)->sum('value');
    
    return view('admin.myStudentProfile', compact('user', 'user_score_value', 'score_user'));
    }
    return back()->with('error', 'Your Student don\'t have any performance record to show now');
}






//TUTOR COURSES
    public function addCourse($id)
    {
        $tutor = Tutor::find($id);

        //count tutor courses
        $tutor_courses = Course::where('tutor_id',$tutor->id)->get();
        $tutor_courses_count = count($tutor_courses);

        $tutor_courses_yr1 = Course::where('tutor_id',$tutor->id)->where('level_id', 1)->get();
        $tutor_courses_yr1_count = count($tutor_courses_yr1);

        $tutor_courses_yr2 = Course::where('tutor_id',$tutor->id)->where('level_id', 2)->get();
        $tutor_courses_yr2_count = count($tutor_courses_yr2);

        $tutor_courses_yr3 = Course::where('tutor_id',$tutor->id)->where('level_id', 3)->get();
        $tutor_courses_yr3_count = count($tutor_courses_yr3);

        $tutor_courses_yr4 = Course::where('tutor_id',$tutor->id)->where('level_id', 4)->get();
        $tutor_courses_yr4_count = count($tutor_courses_yr4);

        return view('admin.courses.add_course', compact('tutor', 'tutor_courses', 'tutor_courses_yr1_count', 'tutor_courses_yr2_count', 'tutor_courses_yr3_count', 'tutor_courses_yr4_count'));
    }



    // public function duration()
    // {
    //     $start = Carbon::parse($this->date_begin);
    //     $end = Carbon::parse($this->date_end);
    //     $hours = $end->diffInHours($start);
    // $seconds = $end->diffInSeconds($start);

    // return $hours . ':' . $seconds;
    // }



    public function addCourseStore(Request $request, $id)
    {
        //
        $tutor = Tutor::find($id);
        $data = $request->all();
        $start_date = $data['start_date'];
        $end_date = $data['end_date'];

//         $start = Carbon::parse($start_date);
//         $end = Carbon::parse($end_date);
// // return $hours = (($end->diffInHours($start)) / 30); to get diff in hours btwn different dates. For same date, remove the 30
//         return $seconds = $end->diffInSeconds($start);

//      return $hours . ':' . $seconds;


     

$course_exists = Course::where('name',$request->name)->get();

if(!count($course_exists)){ 
			
			$course = new Course;
        

			$course->name                = $data['name'];
			$course->course_code         = $data['course_code'];
            $course->department_id       = $tutor->department->id;
			$course->detail              = $data['detail'];
            $course->level_id            = $data['level_id'];
            $course->semester_id         = $data['semester_id'];

            $course->is_practical        = $data['is_practical'];
            $course->periods             = $data['periods'];
            $course->duration_per_period = $data['duration_per_period'];
            //$course->total_duration = $data['total_duration'];
            

            $course->start_date = $data['start_date'];
            $course->end_date = $data['end_date'];
            $course->total_seats = $data['total_seats'];
            $course->tutor_id = $tutor->id;
            
        
            if($request->hasFile('image')){
            	$image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                $fileName = rand(111,99999).'.'.$extension;
                    $large_image_path = 'assets/admin/images/course/large'.'/'.$fileName;
                    $medium_image_path = 'assets/admin/images/course/medium'.'/'.$fileName;  
                    $small_image_path = 'assets/admin/images/course/small'.'/'.$fileName;  

	                Image::make($image_tmp)->save($large_image_path);
 					Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
     				Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

     				$course->image = $fileName; 
                }
            }

       
            $course->save();
            
            return redirect()->route('adminEditCourse', [$course->id])->with('success', 'Course has been added successfully');
            
        }

        return back()->with('error', 'Course already exists');
    }
    



    public function adminEditCourse($id){

        $course = Course::find($id);
        $tutor = Tutor::find($course->tutor->id);

        //count tutor courses
        $tutor_courses = Course::where('tutor_id',$tutor->id)->get();
        $tutor_courses_count = count($tutor_courses);

        $tutor_courses_yr1 = Course::where('tutor_id',$tutor->id)->where('level_id', 1)->get();
        $tutor_courses_yr1_count = count($tutor_courses_yr1);

        $tutor_courses_yr2 = Course::where('tutor_id',$tutor->id)->where('level_id', 2)->get();
        $tutor_courses_yr2_count = count($tutor_courses_yr2);

        return view('admin.courses.edit_course', compact('course', 'tutor', 'tutor_courses_count', 'tutor_courses_yr1_count', 'tutor_courses_yr2_count'));
    
    }



   ///FOR ADMIN IMAGE UPDATE
    public function adminCourseImageUpdate(Request $request, $id){

        //find the request
        $data = $request->all();

        //find the id
        $course = Course::find($id);

        //image logic
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                // Upload Images after Resize
                $extension = $image_tmp->getClientOriginalExtension();
                $fileName = rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/admin/images/main/large'.'/'.$fileName;
                $medium_image_path = 'assets/admin/images/main/medium'.'/'.$fileName;  
                $small_image_path = 'assets/admin/images/main/small'.'/'.$fileName;  

                Image::make($image_tmp)->save($large_image_path);
                 Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                 Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

                 $course->image = $fileName; 
            }
        }
   
        $course->save();

        return back();

    }



    public function adminEditCourseUpdate(Request $request, $id)
    {
        $data = $request->all();
			
			$course = Course::find($id);
        

			$course->name                = $data['name'];
			$course->course_code         = $data['course_code'];
            $course->department_id       = $course->department_id;
			$course->detail              = $data['detail'];
            $course->level_id            = $data['level_id'];
            $course->semester_id         = $data['semester_id'];

            $course->is_practical        = $data['is_practical'];
            $course->periods             = $data['periods'];
            $course->duration_per_period = $data['duration_per_period'];
            //$course->total_duration = $data['total_duration'];
            

            $course->start_date         = $data['start_date'];
            $course->end_date           = $data['end_date'];
            $course->total_seats        = $data['total_seats'];
            $course->tutor_id           = $course->tutor_id;
            
        
            if($request->hasFile('image')){
            	$image_tmp = Input::file('image');
                if ($image_tmp->isValid()) {
                    // Upload Images after Resize
                    $extension = $image_tmp->getClientOriginalExtension();
	                $fileName = rand(111,99999).'.'.$extension;
                    $large_image_path = 'assets/admin/images/course/large'.'/'.$fileName;
                    $medium_image_path = 'assets/admin/images/course/medium'.'/'.$fileName;  
                    $small_image_path = 'assets/admin/images/course/small'.'/'.$fileName;  

	                Image::make($image_tmp)->save($large_image_path);
 					Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
     				Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

     				$course->image = $fileName; 
                }
            }

       
            $course->save();
            
            return back()->with('success', 'Course Updated Successfully');
            
        
    }













    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allCourse()
    {
        //$courses = Course::all();
        return view('admin.courses.all_courses');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function adminQuiz($id)
    {
        //array drm id, we dnt need to do foreach to grab its individual objects
         $course = Course::find($id);

         //to keep tutor on the main layout. this is impt for every route that returns the admin main layout
         $tutor = Tutor::find($course->tutor->id);
        
        return view('admin.questions.quiz', compact('course', 'tutor'));

    }




    public function adminQuizStore(Request $request, $id)
    {
        
        $data = $request->all();
         
        $question = new Question;

        $course = Course::find($id);

        $question->course_id        = $course->id;
        $question->detail           = $data['detail'];
        $question->option_A         = $data['option_A'];
        $question->option_B         = $data['option_B'];
        $question->option_C         = $data['option_C'];
        $question->option_D         = $data['option_D'];
        $question->option_correct   = $data['option_correct'];
       
        $question->que_date         = $data['que_date'];
        $question->que_start_time   =  $data['que_start_time'];
       $question->que_time          =  $data['que_time'];
     
        $question->expected_score   = $data['expected_score'];
        $question->tutor_id   = $course->tutor->id;
        

        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                // Upload Images after Resize
                $extension = $image_tmp->getClientOriginalExtension();
                $fileName = rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/admin/images/question/large'.'/'.$fileName;
                $medium_image_path = 'assets/admin/images/question/medium'.'/'.$fileName;  
                $small_image_path = 'assets/admin/images/question/small'.'/'.$fileName;  

                Image::make($image_tmp)->save($large_image_path);
                 Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                 Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

                 $question->image; 
            }
        }
        $question->save();

 return redirect()->route('adminQuizEdit', [$question->id]);
       // return redirect()->back()->with(compact('questionInfo2'));

    }



public function adminQuizEdit($id){

    $question = Question::find($id);

//array drm id, we dnt need to do foreach to grab its individual objects
$course = Course::find($question->course->id);

//to keep tutor on the main layout. this is impt for every route that returns the admin main layout
//$tutor = Tutor::find($course->tutor->id);
 //to keep tutor on the main layout. this is impt for every route that returns the admin main layout
 $tutor = Tutor::find($question->tutor->id);

    return view('admin.questions.edit_quiz', compact('question', 'course', 'tutor'));
}






public function adminQuizEditStore(Request $request, $id)
    {
        
        $data = $request->all();
         
        $question = new Question;

        $question_id = Question::find($id);

        $question->course_id        = $question_id->course->id;
        $question->detail           = $data['detail'];
        $question->option_A         = $data['option_A'];
        $question->option_B         = $data['option_B'];
        $question->option_C         = $data['option_C'];
        $question->option_D         = $data['option_D'];
        $question->option_correct   = $data['option_correct'];
       
        $question->que_date         = $data['que_date'];
        $question->que_start_time   =  $data['que_start_time'];
       $question->que_time         =  $data['que_time'];
     
        $question->expected_score   = $data['expected_score'];
        $question->tutor_id   = $question_id->tutor->id;
        

        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                // Upload Images after Resize
                $extension = $image_tmp->getClientOriginalExtension();
                $fileName = rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/admin/images/question/large'.'/'.$fileName;
                $medium_image_path = 'assets/admin/images/question/medium'.'/'.$fileName;  
                $small_image_path = 'assets/admin/images/question/small'.'/'.$fileName;  

                Image::make($image_tmp)->save($large_image_path);
                 Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                 Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

                 $question->image; 
            }
        }
        $question->save();

        return back()->with('success', 'Successfully added, continue to add more');
 //return redirect()->route('adminQuizEdit', [$question->id]);
       // return redirect()->back()->with(compact('questionInfo2'));

    }



    public function adminQuizFullEdit($id){

        $question = Question::find($id);
    
    //array drm id, we dnt need to do foreach to grab its individual objects
    $course = Course::find($question->course->id);
    
    //to keep tutor on the main layout. this is impt for every route that returns the admin main layout
    //$tutor = Tutor::find($course->tutor->id);
     //to keep tutor on the main layout. this is impt for every route that returns the admin main layout
     $tutor = Tutor::find($question->tutor->id);
    
        return view('admin.questions.edit_full_quiz', compact('question', 'course', 'tutor'));
    }



    public function adminQuizUpdate(Request $request, $id)
    {
        
        $data = $request->all();
         
        //$question = new Question;

        $question = Question::find($id);

        $question->course_id        = $question->course->id;
        $question->detail           = $data['detail'];
        $question->option_A         = $data['option_A'];
        $question->option_B         = $data['option_B'];
        $question->option_C         = $data['option_C'];
        $question->option_D         = $data['option_D'];
        $question->option_correct   = $data['option_correct'];
       
        $question->que_date         = $data['que_date'];
        $question->que_start_time   =  $data['que_start_time'];
       $question->que_time         =  $data['que_time'];
     
        $question->expected_score   = $data['expected_score'];
        $question->tutor_id   = $question->tutor->id;
        

        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                // Upload Images after Resize
                $extension = $image_tmp->getClientOriginalExtension();
                $fileName = rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/admin/images/question/large'.'/'.$fileName;
                $medium_image_path = 'assets/admin/images/question/medium'.'/'.$fileName;  
                $small_image_path = 'assets/admin/images/question/small'.'/'.$fileName;  

                Image::make($image_tmp)->save($large_image_path);
                 Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                 Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

                 $question->image; 
            }
        }
        $question->save();

        return back()->with('success', 'Successfully added, continue to add more');
 //return redirect()->route('adminQuizEdit', [$question->id]);
       // return redirect()->back()->with(compact('questionInfo2'));

    }
    












    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
//FOR ADMIN IMAGE UPDATE
    public function adminUserUpdate(Request $request, $id){

        //find the request
        $data = $request->all();

        //find the id
        $tutor = Tutor::find($id);

        //image logic
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                // Upload Images after Resize
                $extension = $image_tmp->getClientOriginalExtension();
                $fileName = rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/admin/images/main/large'.'/'.$fileName;
                $medium_image_path = 'assets/admin/images/main/medium'.'/'.$fileName;  
                $small_image_path = 'assets/admin/images/main/small'.'/'.$fileName;  

                Image::make($image_tmp)->save($large_image_path);
                 Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                 Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

                 $tutor->image = $fileName; 
            }
        }
   
        $tutor->save();

        return back();

    }






    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
