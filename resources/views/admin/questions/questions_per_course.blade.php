@extends('admin.layout.main')

@section('content')





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
                    <div class="dash-book dash-b-4">
                        <h5 style="color:blue;">My Questions</h5>
                        <h4 style="color:white">{{$questions_count}}</h4>
                        
                    </div>
                </li>
               
            </ul>
        </div>
    </div>

    <!--== User Details ==-->


{{-- //TUTOR QUESTIONS --}}
<div class="sb2-2-3">
    <div class="row">
        <div class="col-md-12">
            <div class="box-inn-sp">
                <div class="inn-title">
                    
                    <h4>Question Details. For <span style="color:#e66030; font-weight:900;">{{$course->course_code}}</span></h4>
                    {{-- <p></p> --}}
                </div>
                <div class="tab-inn">
                    <div class="table-responsive table-desi" style="overflow-x:visible;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    {{-- <th>Image</th> --}}
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

                            @foreach ($questions as $question)
 
                                <tr>
                                    {{-- <td><span class="list-img"><img class="editCourseImgClass" src="/assets/admin/images/question/small/{{$question->image ? $question->image : 'default.jpg'}}" alt=""></span>
                                    </td> --}}

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