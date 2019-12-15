<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tutor;
use App\Question;
use App\Level;
use App\Course;
use App\Department;
use App\Score;
use Illuminate\Support\Facades\Input;
use Image;
use Auth;
use Rate;
use Review;
use App\Scale;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Http\Requests\ScoreRequest;
use App\Http\Requests\ReviewRequest;
use App\Http\Requests\ScalingTutorsRequest;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerPage()
    {
        //
        return view('front.users.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerPost(Request $request)
    {
        
        $data = $request->all();

        //userCount with email check
        $userCount = User::where('email',$data['email'])->count();
        if($userCount > 0){
            return back()->with('error', 'User already exists');
        }else{

        $user = new User;

        $user->name             = $data['name'];
        $user->reg_number       = '2019'.mt_rand(1000000,9999999);
        $user->gender_id           = $data['gender_id'];
        $user->phone_number     = $data['phone_number'];
        $user->email            = $data['email'];
        $user->level_id            = $data['level_id'];
        $user->department_id       = $data['department_id'];
        $user->password         = Hash::make($data['password']);
        $user->confirm_password = $data['confirm_password'];

           //image logic
           if($request->hasFile('image')){
               
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                // Upload Images after Resize
                $extension = $image_tmp->getClientOriginalExtension();
                $fileName = rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/front/images/register/large'.'/'.$fileName;
                $medium_image_path = 'assets/front/images/register/medium'.'/'.$fileName;  
                $small_image_path = 'assets/front/images/register/small'.'/'.$fileName;  

                Image::make($image_tmp)->save($large_image_path);
                 Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                 Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

                 $user->avatar = $fileName; 
            }
        }

        $user->save();

        //id to be passed to user profile
        $user_id = $user->id;

//bring Auth class, sothat u can use it where neccessary in the redirecting view        
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){

//created this to support the frontLogin middleware                
Session::put('frontSession', $data['email']);

return redirect()->route('userProfile', [$user_id])->with('success', 'Registered Successfully');
            }


        }

    }


    public function checkEmail(Request $request){
    	// Check if User already exists
    	$data = $request->all();
		$usersCount = User::where('email',$data['email'])->count();
		if($usersCount>0){
			echo "false";
		}else{
			echo "true"; die;
		}		
    }

    public function checkRegNum(Request $request){
    	// Check if User already exists
    	$data = $request->all();
		$usersCount = User::where('reg_number',$data['reg_number'])->count();
		if($usersCount>0){
			echo "false";
		}else{
			echo "true"; die;
		}		
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        //
        Auth::logout();
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


public function loginPage(){
    return view('front.users.login');
}


 public function loginPost(Request $request){
        if($request->isMethod('post')){

            $data = $request->all();
            /*echo "<pre>"; print_r($data); die;*/
            //STUDENT LOGIN
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){

//created this to support the frontLogin middleware                
Session::put('frontSession', $data['email']);

  $user_email = $data['email'];
  $user_info = User::where('email',$user_email)->firstOrFail();
  $user_id = $user_info->id;

  if($user_info->status->name == 'Active'){
     return redirect()->route('userProfile', [$user_id])->with('success', 'Logged in Successfully');
            } else {
                return back()->with('sucess', 'User not activated yet');
            }

}

    $tutor_email = $data['email'];
    $tutor_info = Tutor::where('email',$tutor_email)->firstOrFail();
    $tutor_id = $tutor_info->id;
    return redirect()->route('adminDashboard', [$tutor_id])->with('success', 'Logged in Successfully');

    }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    //for users to see their quiz according to course
    public function userCourseQuiz($id, $user_id)
    {
        
        //grab the user to answer this question
        $user = User::find($user_id);
        $course = Course::find($id);
    
//grab questions of a course, users can answer
$questions = Question::where('course_id',$course->id)->paginate(10);


$question_id = Question::where('course_id', $course->id)->firstOrFail();
      
    //trick for jquery timer to show on only quiz page
        $timer_id = 'demo';

//get() trick to help redirect users when exams or quiz are not ready.
//get() is an array used to return count for existing and non-existing objects. It is preferred to firstOrFail() in tis case so that laravel doesn't throw up 404 error
$questionCourse = Question::where('course_id', $course->id)->get();
        if(count($questionCourse)){

            return view('front.questions.quiz', compact('questions', 'user', 'course', 'question_id', 'timer_id'));

        } else {

            return back()->with('error', $course->course_code.' '.'Questions not ready yet');
        }

        
    }






public function userScoreUpdate(ScoreRequest $request, $id, $user_id){
     $data = $request->all();
     
//if(count($request->all()) <= 1){
     $user = User::find($user_id);
     $question = Question::find($id);

$question_option_correct = $question->option_correct;


//if(!count($score)){    
//OPTION A
if(isset($data['option_A']) && !isset($data['option_B']) && !isset($data['option_C']) && !isset($data['option_D'])){
         
        $question_option_by_request = $data['option_A'];
        $score = Score::where('option_choosed',$question_option_by_request)->where('question_id',$question->id)->where('user_id', $user->id)->get();

        
        if(!count($score)){
            $score = new Score;
            $score->option_choosed  = $question_option_by_request;

if($question_option_correct === $question_option_by_request){ $score->value = $question->expected_score;  }else{ $score->value = 0; }
            
            $score->question_id     = $question->id;
            $score->course_id       = $question->course_id;
            $score->user_id         = $user->id;
            $score->save();
            //return 'yes';
        }
     };

//OPTION B
     if(isset($data['option_B']) && !isset($data['option_A']) && !isset($data['option_C']) && !isset($data['option_D'])){
        $question_option_by_request = $data['option_B'];
        $score = Score::where('option_choosed',$question_option_by_request)->where('question_id',$question->id)->where('user_id', $user->id)->get();

        if(!count($score)){
            $score = new Score;
            $score->option_choosed  = $question_option_by_request;
if($question_option_correct === $question_option_by_request){ $score->value = $question->expected_score;  }else{ $score->value = 0; }
            $score->question_id     = $question->id;
            $score->course_id       = $question->course_id;
            $score->user_id         = $user->id;
            $score->save();
            //return 'yes';
       }
  
     };

//OPTION C
     if(isset($data['option_C']) && !isset($data['option_A']) && !isset($data['option_B']) && !isset($data['option_D'])){
        $question_option_by_request = $data['option_C'];
        $score = Score::where('option_choosed',$question_option_by_request)->where('question_id',$question->id)->where('user_id', $user->id)->get();

        if(!count($score)){
            $score = new Score;
            $score->option_choosed  = $question_option_by_request;
if($question_option_correct === $question_option_by_request){ $score->value = $question->expected_score;  }else{ $score->value = 0; }
            $score->question_id     = $question->id;
            $score->course_id       = $question->course_id;
            $score->user_id         = $user->id;
            $score->save();
            //return 'yes';
       }
  
     };


//OPTION D
     if(isset($data['option_D']) && !isset($data['option_A']) && !isset($data['option_B']) && !isset($data['option_C'])){
        $question_option_by_request = $data['option_D'];
        $score = Score::where('option_choosed',$question_option_by_request)->where('question_id',$question->id)->where('user_id', $user->id)->get();

        if(!count($score)){
            $score = new Score;
            $score->option_choosed  = $question_option_by_request;
if($question_option_correct === $question_option_by_request){ $score->value = $question->expected_score;  }else{ $score->value = 0; }
            $score->question_id     = $question->id;
            $score->course_id       = $question->course_id;
            $score->user_id         = $user->id;
            $score->save();
            //return 'yes';
        }
  
     };
//}

     return redirect()->route('userProfile', [$user->id])->with('success', 'Quiz taken successfully');

    //}
     
}





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //onclick of register or login btn by user
    public function userProfile($id)
    {
        $user = User::find($id);
        $user->level->name;
        $user_dept = $user->department->id;
        
        $level = Level::where('id',$user->level->id)->firstOrFail();
        $department = \App\Department::where('id',$user->department->id)->firstOrFail();

    //get request, so we can use foreach in blade
       $courses1 = \App\Course::where('level_id', '=', $level->id)
                                        ->where('department_id', '=', $department->id)
                                        ->where('semester_id', '=', 1)->get();

        $courses2 = \App\Course::where('level_id', '=', $level->id)
                                        ->where('department_id', '=', $department->id)
                                        ->where('semester_id', '=', 2)->get();



    $score_user_count = \App\Score::where('user_id', $user->id)->get();

// if(count($score_user_count)){  
//     $score_user = \App\Score::where('user_id', $user->id)->firstOrFail();
//     $user_score_course_name = $score_user->course->name;
//     $user_score_by_name = $score_user->user->name;
       
//     return view('front.users.profile', compact('user', 'courses1', 'courses2', 'user_score_course_name', '$user_score_by_name'));

//     }


if($user->status->name == 'Active'){  
    return view('front.users.profile', compact('user', 'courses1', 'courses2'));
    }
return redirect()->route('registerPage')->with('Please, wait for activation, to continue accessing the page');

} 




public function studentInfo($id){
    
   $user = User::find($id);
    $user_get = User::where('id',$user->id)->get();
    if(count($user_get)){
        return view('front.users.studentInfo', compact('user'));

    }
    return back()->with('error', 'No requirements to this page for now');
   
}

public function addUserStaffAdviser(Request $request, $id){

$data = $request->all();
$user = User::find($id);

$user->tutor_id = $data['tutor_id'];
$user->save();

return back()->with('success', 'Staff Adviser Sucessfully Added to your Profile');

}







//USERIMAGE UPDATE
    public function userUpdate(Request $request, $id){

        //find the request
        $data = $request->all();

        //find the id
        $user = User::find($id);

        //image logic
        if($request->hasFile('image')){
            $image_tmp = Input::file('image');
            if ($image_tmp->isValid()) {
                // Upload Images after Resize
                $extension = $image_tmp->getClientOriginalExtension();
                $fileName = rand(111,99999).'.'.$extension;
                $large_image_path = 'assets/front/images/user/large'.'/'.$fileName;
                $medium_image_path = 'assets/front/images/user/medium'.'/'.$fileName;  
                $small_image_path = 'assets/front/images/user/small'.'/'.$fileName;  

                Image::make($image_tmp)->save($large_image_path);
                 Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
                 Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

                 $user->avatar = $fileName; 
            }
        }
   
        $user->save();

        return 'yes';

    }



public function userPerformance($id){

$user = User::find($id);

$score_user_get = \App\Score::where('user_id', $user->id)->get();

if(count($score_user_get)){

$score_user = \App\Score::where('user_id', $user->id)->firstOrFail();
$user_score_value = \App\Score::where('user_id', $user->id)->where('course_id', $score_user->course_id)->sum('value');

return view('front.users.performance', compact('user', 'user_score_value', 'score_user'));
}
    return back()->with('error', 'You don\'t have any record to show now');
}


public function userImageUpdate(Request $request, $id){

    //find the request
    $data = $request->all();

    //find the id
    $user = User::find($id);

    //image logic
    if($request->hasFile('image')){
        $image_tmp = Input::file('image');
        if ($image_tmp->isValid()) {
            // Upload Images after Resize
            $extension = $image_tmp->getClientOriginalExtension();
            $fileName = rand(111,99999).'.'.$extension;
            $large_image_path = 'assets/front/images/register/small'.'/'.$fileName;
            $medium_image_path = 'assets/front/images/register/medium'.'/'.$fileName;  
            $small_image_path = 'assets/front/images/register/large'.'/'.$fileName;  

            Image::make($image_tmp)->save($large_image_path);
             Image::make($image_tmp)->resize(600, 600)->save($medium_image_path);
             Image::make($image_tmp)->resize(300, 300)->save($small_image_path);

             $user->avatar = $fileName; 
        }
    }

    $user->save();

    return back();

}



public function rateTutorCourse(Request $request){
//grab all data frm ajax
    $data = $request->all();

//select ajax data
$user_id = $data['uID'];
$course_id = $data['course_id'];

//count if data exist in its supposed database
$rateCount = \App\Review::where('course_id',$course_id)->where('user_id',$user_id)->get();

    if(!count($rateCount)){ 

    $ratedIndex = $data['ratedIndex'];
    $ratedIndex++;
    
        $rate = new \App\Review;
        $rate->user_id = $user_id;
        $rate->course_id = $course_id;
        $rate->course_coverage = $ratedIndex;
        $rate->save();

        //return 'saved';
    
    }
    
    if(count($rateCount)){ 

        $rateCount2 = \App\Review::where('course_id',$course_id)->where('user_id',$user_id)->firstOrFail();
        $rateCount2_id = $rateCount2->id; 

        $ratedIndex = $data['ratedIndex'];
        $ratedIndex++;

        $rateCount2->user_id =  $user_id;
        $rateCount2->course_id =  $course_id;
        $rateCount2->course_coverage =  $ratedIndex;

        $rateCount2->save();

        return 'updated';

    }
  
    
    }




//RATE TUTOR AUDIBILITY
    public function rateTutorAudibility(Request $request){
        //grab all data frm ajax
            $data = $request->all();
        
        //select ajax data
        $user_id = $data['uID'];
        $course_id = $data['course_id'];
        
        //count if data exist in its supposed database
        $rateCount = \App\Review::where('course_id',$course_id)->where('user_id',$user_id)->get();
        
            if(!count($rateCount)){ 
        
            $ratedIndex = $data['ratedIndex'];
            $ratedIndex++;
            
                $rate = new \App\Review;
                $rate->user_id = $user_id;
                $rate->course_id = $course_id;
                $rate->audibility = $ratedIndex;
                $rate->save();
        
                //return 'saved';
            
            }
            
            if(count($rateCount)){ 
        
                $rateCount2 = \App\Review::where('course_id',$course_id)->where('user_id',$user_id)->firstOrFail();
                $rateCount2_id = $rateCount2->id; 
        
                $ratedIndex = $data['ratedIndex'];
                $ratedIndex = $ratedIndex - 4;
        
                $rateCount2->user_id =  $user_id;
                $rateCount2->course_id =  $course_id;
                $rateCount2->audibility =  $ratedIndex;
        
                $rateCount2->save();
        
                return 'updated';
        
            }
          
            
            }








public function ratingTutorCourse(ReviewRequest $request){


$data = $request->all();

//return response()->json($data['save']);
if(isset($data['save'])){
    
$uID = $data['uID'];
$ratedIndex = $data['ratedIndex'];
$ratedIndex++;


if($uID == 0){

    $rate = new \App\Review;
    $rate->rate = $ratedIndex;
   
    $rate->save();

    $find_rate = \App\Review::find($rate->id);
    
} 
else{
    $find_rate->rate = $data['ratedIndex'];
    $find_rate->save();
}

//  else {
//     $rated_id->save();

//     exit(json_encode(array('id' => $uID)));
// }

}


}




public function gradeTutor($id){

    $user = User::find($id);
    $user->level->name;
    $user_dept = $user->department->id;
    
    $level = Level::where('id',$user->level->id)->firstOrFail();
    $department = \App\Department::where('id',$user->department->id)->firstOrFail();

//get request, so we can use foreach in blade
    $courses1 = \App\Course::where('level_id', '=', $level->id)
                                    ->where('department_id', '=', $department->id)
                                    ->where('semester_id', '=', 1)->get();

return view('front.users.grade_staff', compact('courses1', 'user', 'level', 'department'));

}



// public function gradeTutorInput($id, $user_id){

    public function gradeTutorInput($user, $course){

     $user = User::find($user);
     $course = Course::find($course);
   
return view('front.users.grade_staff_input', compact('user', 'course'));

}





public function gradeTutorPost(ScalingTutorsRequest $request, $user, $course){

    $data = $request->all();

   $user = User::find($user);
    
    $course = Course::find($course);
    $tutor = Tutor::find($course->tutor->id);


    $course_rating_times = $course->rating_times;
    $level_id = $user->level_id;
    
    $scale = Scale::where('user_id',$user->id)->where('course_id',$course->id)->where('tutor_id', $tutor->id)->where('level_id', $level_id)->get();

    if(count($scale) < $course_rating_times){

        $scale = new Scale;

        $scale->user_id = $user->id;
        $scale->course_id = $course->id;
        $scale->level_id = $level_id;
        $scale->tutor_id = $tutor->id;
        $scale->information_presented_in_the_course = $data['a1'];
        $scale->lecturer_level_of_knowledge_of_course = $data['a2'];
        $scale->lecturer_regularity_to_class = $data['a3'];
        $scale->lecturer_puntuality_to_class = $data['a4'];
        $scale->class_interactive_sessions = $data['a5'];
        $scale->lecturer_relationship_with_the_class = $data['a6'];
        $scale->recommended_learning_materials_and_handouts = $data['a7'];
        $scale->future_usefulness_of_the_material_presented = $data['a8'];
        $scale->cost_of_materials_given_by_the_lecturer = $data['a9'];
        $scale->lecturer_delivery_of_the_lectures = $data['a10'];
        $scale->nature_of_quiz = $data['a11'];
        $scale->dressing_mode_of_lecturer = $data['a12'];
        $scale->when_absent_from_lectures_did_he_inform_the_class_in_advance = $data['a13'];
        $scale->did_the_lecturer_use_ICT_to_deliver_lectures = $data['a14'];
        $scale->compared_with_other_lecturers_rate_the_lecturer = $data['a15'];
        $scale->if_course_were_not_compulsory_would_you_recommed_it_to_a_friend = $data['a16'];
        $scale->lecturer_sold_handout_directly_to_students = $data['a17'];
        $scale->lecturer_wrote_names_of_students_who_purchased_the_handout = $data['a18'];
        $scale->lecturer_demanded_some_form_of_gratification_from_the_students = $data['a19'];
        $scale->lecturer_motivated_the_class_study = $data['a20'];
        
        $scale->save();

        return back()->with('success', 'Your Ratings were successfully recorded');
    }

    return back()->with('error', 'Error: you can\'t rate this Lecturer '.'<b style="color:red;">'.$tutor->name.'</b>'. ' on '.'<b style="color:red;">'.$course->course_code.'</b>'. ' for morethan('.'<b style="color:red;">'.$course_rating_times.'</b>'.') times');

//   \Session::flash('search', '<div class="no_more_load_inner" style="margin-bottom: 20px;">Found ('.count($blogs_count).') search result for '. '<b>'.$query.'</b></div>');


}









}
//end of baseClass
