@extends('front.layout.main')

    @section('extra_css')

    
    @endsection


 


    

@section('content')

{{-- <script>
    
        $('label.error').css({'color':'red'});
        </script> --}}


    <!--SECTION START-->
    <section>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="{{route('userProfile', $user->id)}}">My Dashboard</a></li>
                        <li><a href="{{route('studentInfo', $user->id)}}" class="pro-act">Profile</a></li>
                        <li><a href="{{route('userPerformance', $user->id)}}">Performance</a></li>
                        <li><a href="{{route('gradeTutor', $user->id)}}">Grade Staff</a></li>
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
                            <h4><img src="images/icon/db1.png" alt="" />Student Course Evaluation Form for  Course: <span style="color:crimson; font-weight:bolder">{{$course->course_code}}</span>.
                                Lecturer: <span style="color:crimson; font-weight:bolder;">{{$course->tutor->name}}</span></h4>
                            <p>Please rate your overall level of satisfaction in the following areas of your learning experience on a 1-5 response scale, scored as <strong>1=Poor</strong>,
                                <strong>Below average=2</strong>, <strong>Average=3</strong>, <strong>Good=4</strong>, <strong>Excellent=5</strong>.
                            </p>
                        </div>



                        <div class="udb-sec udb-cour-stat">
                            <h4 style="text-transform:none;"> Enter any value between 1 to 5, to give a clear rating of their performance</h4>

                            

                                <div class="cor-p7-revi">


                            {{-- FORM FOR COURSE-STUDENT EVALUATION --}}
                                    <form class="col s12" id="gradeStaffForm" method="POST" action="{{route('gradeTutorPost', ['user'=>$user->id, 'course'=>$course->id])}}">
                                        @csrf
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6>Information presented/covered in the course</h6>
                                                <input type="text" name="a1" class="validate">
                                                {{-- <label for="a1" id="errors"></label> --}}
                                            </div>
                                            <div class="input-field col s6">
                                                <h6>The Lecturer's level of knowlegde of the course</h6>
                                                <input type="text" name="a2" class="validate">
                                                {{-- <label for="a2" id="errors2"></label> --}}
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6>The Lecturer's regularity to class</h6>
                                                <input type="text" name="a3" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h6>The Lecturer's puntuality to class</h6>
                                                <input type="text" name="a4" class="validate">
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6>Class interactive/participatory sessions</h6>
                                                <input type="text" name="a5" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h6>The Lecturer's relationship with the class</h6>
                                                <input type="text" name="a6" class="validate">
                                            </div>
                                            
                                           
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6>Recommended learning materials and handouts</h6>
                                                <input type="text" name="a7" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h6>Future usefulness of the material presented</h6>
                                                <input type="text" name="a8" class="validate">
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6>Cost of materials/handout given by the Lecturer</h6>
                                                <input type="text" name="a9" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h6>The Lecturer's delivery of the lectures</h6>
                                                <input type="text" name="a10" class="validate">
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6> Nature of quiz/continous assessment</h6>
                                                <input type="text" name="a11" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h6>The dressing mode of the Lecturer</h6>
                                                <input type="text" name="a12" class="validate">
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6> When absent from the lectures, did he inform the class in advance</h6>
                                                <input type="text" name="a13" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h6> Did the Lecturer use ICT(Powerpoint) to deliver lectures? </h6>
                                                <input type="text" name="a14" class="validate">
                                            </div>
                                        </div>
                                       
                                        
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6>Compared to other Lecturers, rate the lecturer</h6>
                                                <input type="text" name="a15" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h6>If the course were not compulsory, would you recommend it to a friend</h6>
                                                <input type="text" name="a16" class="validate">
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6>The Lecturer sold handouts/materials directly to students</h6>
                                                <input type="text" name="a17" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h6>The Lecturer wrote names of students who purchased the handout/materials</h6>
                                                <input type="text" name="a18" class="validate">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s6">
                                                <h6>The Lecturer demanded some form of gratification from the student</h6>
                                                <input type="text" name="a19" class="validate">
                                            </div>
                                            <div class="input-field col s6">
                                                <h6>The Lecturer motivated the class to study</h6>
                                                <input type="text" name="a20" class="validate">
                                            </div>
                                        </div>

                                       <div class="row">
                                            <div class="input-field col s12">
                                                    
                                                    <input type="submit" value="SUBMIT EVALUATION" class="validate">
                                                </div>
                                       </div>
  
                                    </form>

                                </div>






                            
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    @section('extra_script')

    <script src="{{asset('assets/front/js/jquery.js')}}"></script>
    <script src="{{asset('assets/front/js/jquery.validate.js')}}"></script>
    <script src="{{asset('assets/front/js/mycustom.js')}}"></script>
    {{-- <script src="{{asset('assets/front/js/passtrength.js')}}"></script> --}}

    {{-- <script>
    
    $(function(){
  $('.error').css('border','9px solid red');
});
    </script> --}}

    

@endsection



@endsection