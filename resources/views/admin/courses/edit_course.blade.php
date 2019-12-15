@extends('admin.layout.main')

@section('content')

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add new course</a>
                        </li>
                        <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
				<div class="sb2-2-add-blog sb2-2-1">
                    {{-- <h2>Add New Course</h2> --}}
                    @if(Session::has('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{!! session('success') !!}</strong>
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-error alert-block" style="background-color:#f4d2d2">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                <strong>{!! session('error') !!}</strong>
                        </div>
                    @endif 

                    <ul class="nav nav-tabs tab-list">
                    
                        <div id="home" class="tab-pane fade active in">

                            {{-- image section --}}
                            <div class="inn-title" style="width:30%;">
                                <img style="width:100%;" id="editCourseImgClass" src="/assets/admin/images/main/small/{{$course->image ? $course->image : 'course.png'}}" alt="">
                            </div>

                                <div>
                                    <form id="editCourseImgFormClass" action="{{route('adminCourseImageUpdate', $course->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="image" value="" id="editCourseImageInputFileClass" style="display:none;">
                                    </form>
                                    
                                </div>

                            <div id="inn2" class="inn-title" style="width:70%; float:right; margin-top:-16%;">
                                   
                                    <h4>Edit page For {{$course->course_code}}.</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                </div>
                            <div class="bor">
                                   
                                <form method="POST" enctype="multipart/form-data" action="{{route('adminEditCourseUpdate', $course->id)}}">
                                    @csrf

                                

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <h5>Course Code</h5>
                                            <input style="font-weight:bold;" id="t5-n1" type="text" value="{{$course->course_code}}" name="course_code" class="validate">
                                            {{-- <label for="t5-n1">Course Code</label> --}}
                                        </div>

                                        <div class="input-field col s6">
                                            <h5>Tutor name</h5>
                                                <input id="t5-n15" type="text" name="tutor_id" style="font-weight:bold;" value="{{$tutor->name}}" class="validate" readonly>
                                                {{-- <label for="t5-n15">Course title</label> --}}
                                            </div>


                                    
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <h5>Course Title</h5>
                                            <input id="t5-n17" type="text" name="name" value="{{$course->name}}" style="font-weight:bold;" class="validate">
                                            {{-- <label for="t5-n17">Course title</label> --}}
                                        </div>
                                            <div class="input-field col s6">
                                                <h5>Course Level</h5>
                                                <select style="font-weight:bold;" id="t5-n2" name="level_id">
                                                    {{-- //remove the selection ppty frm options, so that it becomes an object in edit pg --}}
                                                    <option style="font-weight:bold;" value="{{$course->level_id}}">{{$course->level->name}}</option>
                                                         @php
                                                            $levels = \App\Level::all();
                                                        @endphp
                                                        @foreach ($levels as $level)
                                                            <option style="font-weight:bold;" value="{{$level->id}}">{{$level->name}}</option>
                                                        @endforeach 
                                                    </select>
                                                
                                            </div>
                                        </div>

                                    <div class="row">
                                            <div class="input-field col s6">
                                                <h5>Start Date</h5>
                                                <input style="font-weight:bold;" id="addCourseStartDateTime" value="{{$course->start_date}}" type="text" name="start_date" class="validate">
                                                {{-- <label for="addCourseDateTime">Start Date</label> --}}
                                            </div>
                                            <div class="input-field col s6">
                                                <h5>End Date</h5>
                                                <input style="font-weight:bold;" id="addCourseEndDateTime" value="{{$course->end_date}}" type="text" name="end_date" class="validate">
                                                {{-- <label for="addCourseEndDateTime">End Date</label> --}}
                                            </div>
                                        </div>


                                    <div class="row">
                                        {{-- <div class="input-field col s6">
                                            <input id="addCourseDurationDateTime" type="text" name="duration" class="validate">
                                            <label for="addCourseDurationDateTime">Duration</label>
                                        </div> --}}
                            
                                        <div class="input-field col s6">
                                            <h5>Total available students</h5>
                                            <select style="font-weight:bold;" id="t5-n2" name="total_seats">
                                                <option style="font-weight:bold;" value="{{$course->total_seats}}">{{$course->total_seats}}</option>
                                                    
                                                    <option style="font-weight:bold;" value="{{$tutor_courses_yr1_count}}">{{$tutor_courses_yr1_count}} For Year One</option>
                                                    <option style="font-weight:bold;" value="{{$tutor_courses_yr2_count}}">{{$tutor_courses_yr2_count}} For Year Two</option>
                                                       
                                                   
                                                </select>
                                            
                                        </div>
                                        <div class="input-field col s6">
                                                <h5>Practical Inclusive?</h5>
                                                <select id="is_practical" name="is_practical">
                                                    <option value="{{$course->is_practical}}">{{$course->is_practical}}</option>
                        
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                   
                                                </select>
                                        </div>


                                    </div>



                                    

                                        <div class="row">
                                                <div class="input-field col s6">
                                                   <h5>Course Periods(No. of times course will be taught)</h5> 
                                                        <input style="font-weight:bold;" id="periods" value="{{$course->periods}}" type="text" name="periods" class="validate">
                                                        {{-- <label for="periods">Periods</label> --}}
                                                    </div>
                                                <div class="input-field col s6">
                                                   
                                                    <h5>Duration Per Period</h5>
                                                    <input style="font-weight:bold;" id="duration_per_period" type="text" value="{{$course->duration_per_period}}" name="duration_per_period" class="validate" placeholder="Enter number in hours">
                                                    {{-- <label for="duration_per_period">Duration Per Period In Hours</label> --}}
                                                   
                                                </div>
                                                
                                            </div>


                                    <div class="row">

                                           
                                            <div class="input-field col s6">
                                                    <h5>Status</h5>
                                                    <select id="t5-n8" name="status_id">
                                                        <option value="{{$course->status_id}}">{{$course->status->name}}</option>
                                                            @php
                                                                $status = \App\Status::all();
                                                            @endphp
                                                            @foreach ($status as $status)
                                                                <option style="font-weight:bold;" value="{{$status->id}}">{{$status->name}}</option>
                                                            @endforeach 
                                                    </select>
                                                </div>

                                            <div class="input-field col s6">
                                                    <h5>Semester</h5>
                                                <select id="t5-n8" name="semester_id">
                                                    <option value="{{$course->semester_id}}">{{$course->semester->name}}</option>
                                                        @php
                                                            $semesters = \App\Semester::all();
                                                        @endphp
                                                        @foreach ($semesters as $semester)
                                                            <option style="font-weight:bold;" value="{{$semester->id}}">{{$semester->name}}</option>
                                                        @endforeach 
                                                </select>
                                            </div>
                                                                       
                                        </div>
    
                                    <div class="row">
                                        <div class="input-field col s12">
                                                <h5>Course Description</h5>
                                            <textarea style="font-weight:bold;" id="t5-n6" class="materialize-textarea" name="detail" placeholder="Brief about this course">{{$course->detail}}</textarea>
                                            {{-- <label for="t5-n6">Listing Descriptions:</label> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input" value="Submit"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                    //For edit course page
                        $("img#editCourseImgClass").click(function() {
                            $("input#editCourseImageInputFileClass").click();
                        });
                                
                        //once the hidden input file is clicked, post the file data
                        $('input#editCourseImageInputFileClass').change(function() { 
                            // select the form and submit
                            $('form#editCourseImgFormClass').submit(); 
                        });
                    </script>


 @endsection