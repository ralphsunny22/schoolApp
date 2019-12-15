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
                        <li><a href="{{route('userProfile', $user->id)}}" class="pro-act">My Dashboard</a></li>
                        <li><a href="{{route('studentInfo', $user->id)}}">Profile</a></li>
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

                        <img id="imgFile" src="/assets/front/images/register/small/{{$user->avatar}}" alt="user">

                       <form action="" method="post" enctype="multipart/form-data">
                            <input type="file" id="inputFile" name="image" value="" style="display: none;" />
                            <input type="submit" id="submitBtn" value="" style="display:none;">
                       </form>
                           
                        
                        
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

                   
                    <div class="pro-user-bio" style="display:none;">
                            <ul>
                                <li>
                                    <h4>Tutor-Course <span style="color:#ff4500; font-size: 18px; font-weight: 700">Rating</span></h4>
                                </li>
                                <li>Student Id: {{$user->reg_number}}</li>
                                <li id="coverage"><a href="#!" style="font-size:12px; font-weight:bold">Course Coverage: 
                                    <i class="fa fa-star" data-index="0"  style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="1"  style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="2"  style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="3"  style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="4"  style="margin-right:0px; width:16px;"></i>
                                </a></li>
                                <li><a href="#!" style="font-size:12px; font-weight:bold">Audibility: 
                                    <i class="fa fa-star audibility" data-index="5" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star audibility" data-index="6" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star audibility" data-index="7" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star audibility" data-index="8" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star audibility" data-index="9" style="margin-right:0px; width:16px;"></i>
                                </a></li>
                                <li><a href="#!" style="font-size:12px; font-weight:bold">Puntuality: 
                                    <i class="fa fa-star" data-index="10" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="11" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="12" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="13" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="14" style="margin-right:0px; width:16px;"></i>    
                                </a></li>
                                <li><a href="#!" style="font-size:12px; font-weight:bold">Understanding: 
                                    <i class="fa fa-star" data-index="15" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="16" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="17" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="18" style="margin-right:0px; width:16px;"></i>
                                    <i class="fa fa-star" data-index="19" style="margin-right:0px; width:16px;"></i>    
                                </a></li>
                            </ul>
                        </div>


                </div>
                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4><img src="images/icon/db1.png" alt="" /> My Dashboard</h4>
                            <p>You are welcome to this department, with ID number <strong>{{$user->reg_number}}</strong>, now in <strong>{{$user->level->name}}.</strong> 
                                You are registered here as a <strong>{{$user->role}}.</strong> Feel free to navigate and know more about your department
                            </p>
                        </div>



                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> Course Status For <strong>{{$user->department->name}}</strong> Department, <strong>First Semester</strong>, <strong>{{$user->level->name}}</strong></h4>
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
        <script>
  
  

//         var ratedIndex = -1; var course_id =0; var uID=0;

//         $(document).ready(function () {
//             resetStarColors();
//             resetAudioStarColors();

//             if(localStorage.getItem('ratedIndex') != null){
//             setStars(parseInt(localStorage.getItem('ratedIndex')));
//             uID = localStorage.getItem('uID');
//          }
//             $('.fa-star').on('click', function(){
//                 ratedIndex = parseInt($(this).data('index'));
//                 localStorage.setItem('ratedIndex', ratedIndex);
//                 saveToTheDB();
//             });           


//             $('.fa-star').mouseover(function(){             
//                 resetStarColors();
//                 var currentIndex = parseInt($(this).data('index'));
//                 setStars(currentIndex);
//             });

//             $('.fa-star').mouseleave(function(){
//                 resetStarColors();

//                 if(ratedIndex != -1)
//                setStars(ratedIndex);
//             });


// //audibility
//             $('.audibility').on('click', function(){
//                 ratedIndex = parseInt($(this).data('index'));
//                 localStorage.setItem('ratedIndex', ratedIndex);
//                 saveToAudibilityDB();
//             });

//             $('.audibility').mouseover(function(){             
//                 resetAudioStarColors();
//                 var currentIndex = parseInt($(this).data('index'));
//                 setStars(currentIndex);
//             });

//             $('.audibility').mouseleave(function(){
//                 resetAudioStarColors();

//                 if(ratedIndex != -1)
//                setAudioStars(ratedIndex);
//             });



//         });
// //end of document ready

// //coverage ajax call
// function saveToTheDB(){

//     $.ajax({
//         url   : '{{ route("rateTutorCourse") }}',
//         method: 'POST',
//         dataType: 'json',
//         data: {
//             save: 1,
//             uID: uID,
//             course_id: course_id,
//             ratedIndex: ratedIndex,
//             _token: '{{csrf_token()}}',
//         }, success: function(r){
//             console.log(r);
//             uID = r.id;
//             localStorage.setItem('uID', uID);
//         }, error: function (data, textStatus, errorThrown) {
//         console.log(data);

//     },
//     });

// }


// //saveToAudibilityColumn
// function saveToAudibilityDB(){

// $.ajax({
//     url   : '{{ route("rateTutorAudibility") }}',
//     method: 'POST',
//     dataType: 'json',
//     data: {
//         save: 1,
//         uID: uID,
//         course_id: course_id,
//         ratedIndex: ratedIndex,
//         _token: '{{csrf_token()}}',
//     }, success: function(r){
//         console.log(r);
//         uID = r.id;
//         localStorage.setItem('uID', uID);
//     }, error: function (data, textStatus, errorThrown) {
//     console.log(data);

// },
// });

// }




// //coverage Set Colors 
//         function setStars(max){
//             for (var i=0; i <= max; i++)
//                     $('.fa-star:eq('+i+')').css('color', 'OrangeRed');
//         }

//         function resetStarColors() {
//             $('.fa-star').css('color', 'black');
//         }


//   //audibility Set Colors  
//         function setAudioStars(max){
//             for (var i=5; i <= max; i-4)
//                     $('.audibility:eq('+i+')').css('color', 'OrangeRed');
//         }

//         function resetAudioStarColors() {
//             $('.audibility').css('color', 'black');
//         }
        
        </script>




{{-- script for audibility review --}}
{{-- <script>
            var ratedIndex = -1;
    
            $(document).ready(function () {
                resetStarColors();
    
                if(localStorage.getItem('ratedIndex') != null){
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
             }
                $('.audibility').on('click', function(){
                    ratedIndex = parseInt($(this).data('index'));
                    localStorage.setItem('ratedIndex', ratedIndex);
                    saveToTheDB();
                });           
    
    
                $('.audibility').mouseover(function(){             
                    resetStarColors();
                    var currentIndex = parseInt($(this).data('index'));
                    setStars(currentIndex);
                });
    
                $('.audibility').mouseleave(function(){
                    resetStarColors();
    
                    if(ratedIndex != -1)
                   setStars(ratedIndex);
                });
    
            });
    
    
    function saveToTheDB(){
    
        $.ajax({
            url   : '{{ route("rateTutorAudibility") }}',
            method: 'POST',
            dataType: 'json',
            data: {
                save: 1,
                uID: uID,
                course_id: course_id,
                ratedIndex: ratedIndex,
                _token: '{{csrf_token()}}',
            }, success: function(r){
                console.log(r);
                uID = r.id;
                localStorage.setItem('uID', uID);
            }, error: function (data, textStatus, errorThrown) {
            console.log(data);
    
        },
        });
    
    }
    
            function setStars(max){
                for (var i=0; i <= max; i++)
                        $('.audibility:eq('+i+')').css('color', 'OrangeRed');
            }
    
            function resetStarColors() {
                $('.audibility').css('color', 'black');
            }
            
            </script> --}}



    @endsection



@endsection