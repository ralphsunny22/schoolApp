@extends('admin.layout.main')

@section('content')



@php
//$tutor = \App\Tutor::where('id', $user->id)->firstOrFail();
$courses = \App\Course::where('tutor_id', $tutor->id)->get();

//$department = \App\Department::where('')

@endphp

<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href=""> Dashboard</a>
            </li>
            <li class="page-back"><a href="/"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2>Admin Dashboard</h2>
        {{-- <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p> --}}
        <div class="db-2">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5 style="color:blue;">All Courses</h5>
                        <h4 style="color:white">{{$tutor_courses_count}}</h4>
                        {{-- <a href="#">View more</a> --}}
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5 style="color:blue;">Students</h5>
                        <h4 style="color:white">{{$tutor_students_count}}</h4>
                        {{-- <a href="#">View more</a> --}}
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5 style="color:blue;">Personal Students</h5>
                        <h4 style="color:white">{{$tutor_personal_students_count}}</h4>
                    </div>
                </li>

                <li>
                    <div class="dash-book dash-b-4">
                        <h5 style="color:blue;">My Questions</h5>
                        <h4 style="color:white">{{$tutor_questions_count}}</h4>
                        
                    </div>
                </li>
               
            </ul>
        </div>
    </div>

    <!--== User Details ==-->





{{-- 
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        <h4>Student Details</h4>
                        <p>All about students like name, student id, phone, email, country, city and more</p>
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Country</th>
                                        <th>Id</th>
                                        <th>Date of birth</th>
                                        <th>Status</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>united states</td>
                                        <td>ST17241</td>
                                        <td>03 Jun 1990</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>lucas@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST10231</td>
                                        <td>16 Feb 1987</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 3214 6522</td>
                                        <td>chadengle@dummy.com</td>
                                        <td>united states</td>
                                        <td>ST17241</td>
                                        <td>03 Jun 1990</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Lucas Caden</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>lucas@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST10231</td>
                                        <td>16 Feb 1987</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-img"><img src="images/user/5.png" alt=""></span>
                                        </td>
                                        <td><a href="#"><span class="list-enq-name">Ethan Oliver</span><span class="list-enq-city">Illunois, United States</span></a>
                                        </td>
                                        <td>+01 8574 6854</td>
                                        <td>Ethan@gmail.com</td>
                                        <td>Illinois</td>
                                        <td>ST32168</td>
                                        <td>21 Jun 1992</td>
                                        <td>
                                            <span class="label label-success">Active</span>
                                        </td>
                                        <td><a href="admin-student-details.html" class="ad-st-view">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    STUDENT DETAILS --}}



    
    <!--== TUTOR COURSES ==-->
    <div class="sb2-2-3">
        <div class="row">
            <div class="col-md-12">
                <div class="box-inn-sp">
                    <div class="inn-title">
                        
                        <h4>Course Details</h4>
                        {{-- <p></p> --}}
                    </div>
                    <div class="tab-inn">
                        <div class="table-responsive table-desi">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Faculty</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Periods</th>
                                        <th>Duration per period</th>
                                        <th>Participants</th>
                                        {{-- <th>Status</th> --}}
                                        <th>Quiz</th>
                                        <th>Questions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                        
                                       
                                @foreach ($courses as $course)
     
                                    <tr>
                                        <td><span class="list-img"><img id="adminImg" src="/assets/admin/images/main/small/{{$course->image ? $course->image : 'course.png'}}" alt=""></span>
                                        </td>
                                        <td style="color: #263238;">{{$course->course_code}}</td>
                                        <td><a href="admin-student-details.html"><span class="list-enq-name">{{$course->name}}</span></a>
                                        </td>
                                        <td>{{$course->department->faculty->name}}</td>
                                        <td style="font-weight: 700;  color: #263238;">{{$course->start_date}}</td>
                                        <td style="font-weight: 700;  color: #263238;">{{$course->end_date}}</td>
                                        <td>{{$course->periods}}</td>
                                        <td>{{$course->duration_per_period}}</td>
                                        <td>{{$course->total_seats}}</td>
                                        <td>
                                            <span class="label label-success"><a href="{{route('adminQuiz',$course->id)}}" class="ad-st-view" style="background-color:#5cb85c">Add</a></span>
                                        </td>
                                        <td><a href="{{route('adminQuestionsPerCourse', $course->id)}}" class="ad-st-view">View</a></td>
                                    </tr>

                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>
    </div>


{{-- //TUTOR STUDENTS --}}
    <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            
                            <h4>Student Details. **Indicates your personal students</h4>
                            {{-- <p></p> --}}
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Fullname</th>
                                            <th>Registration ID</th>
                                            <th>Department</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Level</th>        
                                            
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
    
                                    @foreach ($tutor_students as $student)
         
                                        <tr>
                                            <td><span class="list-img"><img class="editCourseImgClass" src="/assets/front/images/register/small/{{$student->avatar ? $student->avatar : 'default_user.png'}}" alt=""></span>
                                            </td>

                                            <div>
                                                    <form id="editCourseImgFormClass" action="{{route('adminUserUpdate', $tutor->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="file" name="image" value="" class="editCourseImageInputFileClass" style="display:none;">
                                                    </form>
                                                    
                                                </div>

                                            
                                            <td style="color: #263238;">

                                                {{$student->tutor_id != $tutor->id ? $student->name : $student->name.'**'}}
                                                
                                            </td>
                                            <td>{{$student->reg_number}}</td>
                                            <td><a href="admin-student-details.html"><span class="list-enq-name">{{$student->department->name}}</span><span class="list-enq-city">{{$student->department->faculty->name}}</span></a>
                                            </td>
                                            <td>{{$student->phone_number}}</td>
                                            <td>{{$student->email}}</td>
                                            <td>{{$student->level->name}}</td>
                                            
                                            <td><a href="{{route('adminStudentInfo', $student->id)}}" class="ad-st-view">View</a></td>
                                        </tr>
    
                                    @endforeach
    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                             
                          
                        <div class="inn-title">
                            <h4 class="text-center"><span style="background-color: aquamarine; color: firebrick;font-size: 16px;font-weight: bolder;font-family: 'Open Sans', sans-serif; padding: 5px;">Year One: {{$tutor_students_level_yr1_count}}</span> 
                                <span style="background-color: aqua; color: black; font-size: 16px;font-weight: bolder;font-family: 'Open Sans', sans-serif; padding: 5px;">Year Two: {{$tutor_students_level_yr2_count}}</span> 
                                <span style="background-color: darkblue; color: aqua; font-size: 16px;font-weight: bolder;font-family: 'Open Sans', sans-serif; padding: 5px;">Year Three: {{$tutor_students_level_yr3_count}}</span> 
                                <span style="background-color: aqua; color: black; font-size: 16px;font-weight: bolder;font-family: 'Open Sans', sans-serif; padding: 5px;">Year Four: {{$tutor_students_level_yr4_count}}</span>
                            </h4>
                            {{-- <p></p> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>



{{-- //TUTOR QUESTIONS --}}
<div class="sb2-2-3" style="display:none;">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    
                    <h4>Question Details</h4>
                    {{-- <p></p> --}}
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi" style="overflow-x:visible;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Detail</th>
                                    <th>Type</th>
                                    <th>Option A</th>
                                    <th>Option B</th>
                                    <th>Option C</th>
                                    <th>Option D</th>
                                    <th>Correct Option</th> 
                                    <th>Question Date</th> 
                                    <th>Question Duration</th> 
                                    <th>Expected Score</th>        
                                    
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($tutor_questions as $question)
 
                                <tr>
                                    <td><span class="list-img"><img class="editCourseImgClass" src="/assets/admin/images/question/small/{{$question->image ? $question->image : 'default.jpg'}}" alt=""></span>
                                    </td>

                                    <div>
                                            <form id="editCourseImgFormClass" action="{{route('adminUserUpdate', $question->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="file" name="image" value="" class="editCourseImageInputFileClass" style="display:none;">
                                            </form>
                                            
                                        </div>


                                    <td style="color: #263238;">{{$question->detail}}</td>
                                    <td>{{$question->type_id === 1 ? 'Quiz' : 'Exam'}}</td>
                
                                    <td>{{$question->option_A}}</td>
                                    <td>{{$question->option_B}}</td>
                                    <td>{{$question->option_C}}</td>
                                    <td>{{$question->option_D}}</td>
                                    <td>{{$question->option_correct}}</td>
                                    <td>{{$question->que_date}} by {{$question->que_start_time}}</td>
                                    <td>{{$question->que_time}}</td>
                                    <td>{{$question->expected_score}}</td>
                                    
                                    <td><a href="{{route('adminQuizFullEdit', $question->id)}}" class="ad-st-view">View</a></td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





</div>
{{-- END OF DASHBOARD --}}

@endsection