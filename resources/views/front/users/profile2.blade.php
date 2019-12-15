@extends('front.layout.main')

    @section('extra_css')
          
    @endsection


 


    

@section('content')


    <!--SECTION START-->
    <section>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="dashboard.html" class="pro-act">My Dashboard</a></li>
                        <li><a href="db-profile.html">Profile</a></li>
                        <li><a href="javascript:void(0);">Performance</a></li>
                        <li><a href="{{route('gradeTutor', $user->id)}}" class="pro-act">Grade Staff</a></li>
                        <li><a href="#">Time Line</a></li>
                        <li><a href="#">Entry</a></li>
                        <li><a href="#">Notifications</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">

                        <img id="myImg" src="/assets/front/images/register/small/{{$user->avatar}}" alt="user">
                        {{-- <form id="my_form" action="{{route('userUpdate')}}">
                            <input type="file" id="my_file" name="image" value="" style="display: none;" />
                        </form> --}}
                        
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4>{{$user->name}}</h4>
                            </li>
                            <li>Student Id: {{$user->reg_number}}</li>
                            <li><a href="#!"><i class="fa fa-facebook"></i> Facebook: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-google-plus"></i> Google: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-twitter"></i> Twitter: my sample</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4><img src="images/icon/db1.png" alt="" /> My Profile</h4>
                            <p>You are welcome to this department, with ID number <strong>{{$user->reg_number}}</strong>, now in <strong>{{$user->level->name}}.</strong> 
                                You are registered here as a <strong>{{$user->role}}.</strong> Feel free to navigate and know more about your department
                            </p>
                        </div>



                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> Course Status For <strong>{{$user->department->name}}</strong> Department, <strong>First Semester</strong>, <strong>200 Level</strong></h4>
                            <p>Take a look at all courses available for your level</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Course Name</th>
                                            <th>Start Date</th>
                                            <th>Start</th>
                                            <th>Status</th>
                                            <th>Exam</th>
                                            <th>Quiz</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            //$courses = Courses::find($user->department->id);
                                        @endphp
                                        @foreach ($courses1 as $course) 
                                            <tr onMouseOver="this.style.cursor='pointer'">
                                                <td>{{$course->course_code}}</td>
                                                <td>{{$course->name}}</td>
                                                <td>{{$course->start_date}}</td>
                                                <td>{{$course->end_date}}</td>
                                                <td><span class="pro-user-act">active</span></td>
                                                <td><a href="sdb-$course-edit.html" class="pro-edit">view</a></td>
                                                <td><a href="{{route('userCourseQuiz', [$course->id, $user->id])}}" class="pro-edit">view</a></td>    
                                            </tr>
                                        @endforeach            
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> 
                                Course Status For <strong>{{$user->department->name}}</strong> Department, <strong>Second Semester</strong>, <strong>100 Level</strong></h4>
                            <p>Take a look at all courses available for your level</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Course Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Edit</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>

                                    <tbody>
  
                                        @foreach ($courses2 as $course) 
                                            <tr>
                                                <td>{{$course->course_code}}</td>
                                                <td>{{$course->name}}</td>
                                                <td>{{$course->start_date}}</td>
                                                <td>{{$course->end_date}}</td>
                                                <td><span class="pro-user-act pro-user-de-act">active</span></td>
                                                <td><a href="sdb-$course-edit.html" class="pro-edit">view</a></td>
                                                <td><a href="sdb-$course-view.html" class="pro-edit">view</a></td>
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
    </section>
    <!--SECTION END-->

    @section('extra_script')
        {{-- <script>
            $("myImg").click(function() {
    $("input[id='my_file']").click();

});

</script> --}}




    @endsection



@endsection