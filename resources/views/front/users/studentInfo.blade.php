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
                            <h4><img src="images/icon/db1.png" alt="" /> My Student Profile</h4>
                            <p>Preview your details. If you have none, make sure to add a staff adviser, to your profile</p>
                            <div class="sdb-tabl-com sdb-pro-table">
                                <table class="responsive-table bordered">
                                    <tbody>
                                        
                                        <tr>
                                            <td>Email</td>
                                            <td>:</td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>:</td>
                                            <td>{{$user->phone_number}}</td>
                                        </tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>:</td>
                                            <td>{{$user->gender->status}}</td>
                                        </tr>
                                        <tr>
                                            <td>Personal Staff Adviser</td>
                                            <td>:</td>
                                            <td> 
                                                @php
                                                    $user_staff_adviser_id = \App\User::where('tutor_id', $user->tutor_id)->get();
                                                   // dd($user_staff_adviser_id)
                                                @endphp



                                                @if (count($user_staff_adviser_id) > 0)
                                                   
                                                    @if ($user->tutor_id != 0)
                                                        {{$user->tutor->name}}
                                                    @else
                                                    <div class="row">
                                                        <form action="{{route('addUserStaffAdviser', $user->id)}}" method="post">@csrf
                                                            <div class="input-field col s8">
                                                                <select id="tutor" name="tutor_id">
                                                                    <option value="" disabled selected>Select Adviser</option>
                                                                    @php
                                                                        $tutors = \App\Tutor::where('department_id', $user->department_id)->get();
                                                                    @endphp
                                                                    @foreach ($tutors as $tutor)
                                                                        <option value="{{$tutor->id}}">{{$tutor->name}}</option>
                                                                    @endforeach     
                                                                </select>
                                                            </div>
        
                                                            <div class="input-field col s4">
                                                                {{-- <button class="waves-effect waves-light btn-large sdb-btn sdb-btn-edit" type="submit" style="height:45px;">Submit</button> --}}
                                                                <button class="btn btn-success" type="submit" style="height:45px; background-color:#2f4f73">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div></td>
                                                    @endif

                                                @endif
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td><span class="db-done" style="font-weight:700;">{{$user->status->name}}</span> </td>
                                        </tr>
                                    </tbody>
                                </table>
                                {{-- <div class="sdb-bot-edit">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                    <a href="#" class="waves-effect waves-light btn-large sdb-btn sdb-btn-edit"><i class="fa fa-pencil"></i> Edit my profile</a>
                                </div> --}}
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