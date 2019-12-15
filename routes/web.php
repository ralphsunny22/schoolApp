<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.landing');
});

Route::get('/user_alert', function () {
    return view('sweetalert');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/reg_page', 'UsersController@registerPage')->name('registerPage');
Route::post('/reg_post', 'UsersController@registerPost')->name('registerPost');
//Route::post('/check-reg_number', 'UsersController@checkRegNum')->name('checkRegNum');
Route::match(['GET','POST'],'/check-email','UsersController@checkEmail');
Route::match(['GET','POST'],'/check-reg_number','UsersController@checkRegNum');
Route::get('/logout', 'UsersController@logout')->name('logout');
Route::get('/login', 'UsersController@loginPage')->name('loginPage');
Route::post('/login', 'UsersController@loginPost')->name('loginPost');



Route::group(['middleware'=>['frontLogin']],function(){
    //All routes you can access after login
});

Route::get('/dean_admin/{id}', 'AdminController@deanDashboard')->name('deanDashboard');
Route::get('/admin/{id}', 'AdminController@adminDashboard')->name('adminDashboard');
Route::get('/questions_per_course/{id}', 'AdminController@adminQuestionsPerCourse')->name('adminQuestionsPerCourse');

Route::get('/admin_add_course/{tutor_id}', 'AdminController@addCourse')->name('addCourse');
Route::post('/admin_add_course/{tutor_id}', 'AdminController@addCourseStore')->name('addCourseStore');
Route::get('/admin_all_course', 'AdminController@allCourse')->name('allCourse');

Route::get('/admin_add_quiz/{id}', 'AdminController@adminQuiz')->name('adminQuiz');
Route::post('/admin_add_quiz/{id}', 'AdminController@adminQuizStore')->name('adminQuizStore');
Route::get('/admin_edit_quiz/{id}', 'AdminController@adminQuizEdit')->name('adminQuizEdit');
Route::post('/admin_edit_quiz/{id}', 'AdminController@adminQuizEditStore')->name('adminQuizEditStore');

Route::get('/performance_profile/{id}', 'AdminController@performanceProfile')->name('performanceProfile');

Route::get('/admin_edit_full_quiz/{id}', 'AdminController@adminQuizFullEdit')->name('adminQuizFullEdit');

Route::post('/admin_quiz_update/{id}', 'AdminController@adminQuizUpdate')->name('adminQuizUpdate');




Route::get('/user_quiz', 'UsersController@userQuiz')->name('userQuiz');

Route::get('/user_profile/{id}', 'UsersController@userProfile')->name('userProfile');
Route::get('/student_info/{id}', 'UsersController@studentInfo')->name('studentInfo');
Route::post('/add_staff_adviser_to_user/{id}', 'UsersController@addUserStaffAdviser')->name('addUserStaffAdviser');



Route::post('/user_update', 'AdminController@userUpdate')->name('userUpdate');

Route::post('/admin_user_update/{id}', 'AdminController@adminUserUpdate')->name('adminUserUpdate');//for image specifically

Route::get('/user_course_quiz/{id}/{user_id}', 'UsersController@userCourseQuiz')->name('userCourseQuiz');

Route::post('/user_score_update/{id}/{user_id}', 'UsersController@userScoreUpdate')->name('userScoreUpdate');

Route::get('/user_performance/{user_id}', 'UsersController@userPerformance')->name('userPerformance');

Route::post('/front_user_update/{id}', 'UsersController@userImageUpdate')->name('userImageUpdate');

Route::post('/rate_tutor_course', 'UsersController@rateTutorCourse')->name('rateTutorCourse');
Route::post('/rate_tutor_audibility', 'UsersController@rateTutorAudibility')->name('rateTutorAudibility');
// Route::post('/rating_tutor_course', 'UsersController@ratingTutorCourse')->name('ratingTutorCourse');//for testin

Route::get('/grade_tutor/{user_id}', 'UsersController@gradeTutor')->name('gradeTutor');

Route::get('/grade_tutor_input/{user}/course/{course}', 'UsersController@gradeTutorInput')->name('gradeTutorInput');

// Route::get('events/{event}/remind/{user}', [
//     'as' => 'remindHelper', 'uses' => 'EventsController@remindHelper']);

// In view
// route('remindHelper',['event'=>$eventId,'user'=>$userId]);

Route::post('/grade_tutor_input/{id}/{course_id}', 'UsersController@gradeTutorPost')->name('gradeTutorPost');

//Route::post('/load_user_Img', 'UsersController@loadUserImgViaAjax')->name('loadUserImgViaAjax');






Route::get('/admin_edit_course/{id}', 'AdminController@adminEditCourse')->name('adminEditCourse');
Route::post('/admin_edit_course/{id}', 'AdminController@adminEditCourse')->name('adminEditCourse');
Route::post('/admin_course_image_update/{id}', 'AdminController@adminCourseImageUpdate')->name('adminCourseImageUpdate');//for image specifically
Route::post('/admin_edit_course_update/{id}', 'AdminController@adminEditCourseUpdate')->name('adminEditCourseUpdate');

Route::get('/admin_student_info/{id}', 'AdminController@adminStudentInfo')->name('adminStudentInfo');




//





Route::group(['middleware'=>['frontLogin']],function(){
   
});