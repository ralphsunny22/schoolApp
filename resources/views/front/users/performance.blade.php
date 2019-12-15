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
                        <li><a href="{{route('userProfile', $user->id)}}">My Dashboard</a></li>
                        <li><a href="{{route('studentInfo', $user->id)}}">Profile</a></li>
                        <li><a href="{{route('userPerformance', $user->id)}}" class="pro-act">Performance</a></li>
                        <li><a href="{{route('gradeTutor', $user->id)}}" class="pro-act">Grade Staff</a></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">

                        <img onMouseOver="this.style.cursor='pointer'" id="userImg" src="/assets/front/images/register/small/{{$user->avatar}}" alt="user">
                            <div>
                                <form id="userImageForm" action="{{route('userImageUpdate', $user->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="image" value="" id="img_student" style="display:none;">
                                </form>
                                
                            </div>
                        
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
                            <h4><img src="images/icon/db1.png" alt="" /> Performance Preview</h4>
                            <p>Kindly go through the table to see your academic performance so far</p>
                        </div>



                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> For <strong>{{$user->department->name}}</strong> Department, <strong>{{$score_user->question->course->level->name}}</strong></h4>
                            <p>Some columns remain void, untill completion of exams</p>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Semester</th> 
                                            <th>Course Code</th>
                                            <th>Quiz Score</th>
                                            <th>Exam Score</th>
                                            <th>Total</th>
                                            <th>Grade</th>
                                            {{-- <th>Quiz</th> --}}
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            //$courses = Courses::find($user->department->id);
                                        @endphp
                                        
                                            <tr onMouseOver="this.style.cursor='pointer'">
                                                @php
                                                    $course_user = \App\Course::where('department_id', $user->department->id)->where('level_id', $user->level_id)->first();
                                                @endphp
                                                <td>{{$course_user->semester->name}}</td>
                                                
                                                <td>{{$score_user->question->course->course_code}}</td>
                                                <td>{{$user_score_value}}</td>
                                                <td>null</td>
                                                <td>{{$user_score_value}}</td>
                                               
                                                <td>null</td>
                                                
                                            </tr>
                                                    
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