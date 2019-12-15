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
                            <h4><img src="images/icon/db1.png" alt="" />List of lecturers</h4>
                            <p>Level: <strong>{{$level->name}}.</strong> Department: <strong>{{$department->name}}</strong></p>
                        </div>



                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> Click on any of them, to give a clear rating of their performance</p>


                            




                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Staff Image</th>
                                            <th>Staff name</th>
                                            <th>Course code</th>
                                            <th>Department</th>
                                            <th>Level</th>
                                            <th colspan="4">Action</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            //$courses = Courses::find($user->department->id);
                                        @endphp
                                        @foreach ($courses1 as $course) 
                                            <tr onMouseOver="this.style.cursor='pointer'">
                                                <td>{{$course->tutor->image}}</td>
                                                <td>{{$course->tutor->name}}</td>
                                                <td>{{$course->course_code}}</td>
                                                <td>{{$course->department->name}}</td>
                                                <td>{{$course->level->name}}</td>
                                                
                                              
                                                <td><a href="{{route('gradeTutorInput', ['user'=>$user->id, 'course'=>$course->id])}}" class="pro-edit">Rate Performance</a></td>    
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