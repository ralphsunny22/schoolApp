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
                    <h2>Add New Course</h2>

            {{-- under "sb2-2-add-blog sb2-2-1 --}}
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
{{-- onTop "nav nav-tabs tab-list"--}}
                    <ul class="nav nav-tabs tab-list">
                    
                        <div id="home" class="tab-pane fade active in">
                            <div class="inn-title">
                                <h4>Course Information For {{$tutor->department->name}} Department</h4>
                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                            </div>




                            <div class="bor">

                                <form method="POST" enctype="multipart/form-data" action="{{route('addCourseStore', $tutor->id)}}">
                                    @csrf

                                    <div class="row">
                                        <div class="input-field col s6">
                                            <h5>Course Code</h5>
                                            <input style="font-weight:bold;" id="t5-n1" type="text" name="course_code" class="validate">
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
                                            <input id="t5-n17" type="text" name="name" style="font-weight:bold;" class="validate">
                                            {{-- <label for="t5-n17">Course title</label> --}}
                                        </div>
                                            <div class="input-field col s6">
                                                <h5>Course Level</h5>
                                                <select style="font-weight:bold;" id="t5-n2" name="level_id">
                                                    <option style="font-weight:bold;" value="" disabled selected> Select Level</option>
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
                                                <input style="font-weight:bold;" id="addCourseStartDateTime" type="text" name="start_date" class="validate">
                                                {{-- <label for="addCourseDateTime">Start Date</label> --}}
                                            </div>
                                            <div class="input-field col s6">
                                                <h5>End Date</h5>
                                                <input style="font-weight:bold;" id="addCourseEndDateTime" type="text" name="end_date" class="validate">
                                                {{-- <label for="addCourseEndDateTime">End Date</label> --}}
                                            </div>
                                        </div>


                                    <div class="row">
                                        {{-- <div class="input-field col s6">
                                            <input id="addCourseDurationDateTime" type="text" name="duration" class="validate">
                                            <label for="addCourseDurationDateTime">Duration</label>
                                        </div> --}}
                            
                                        <div class="input-field col s6">
                                            {{-- <h5>Total available students</h5>
                                            <select style="font-weight:bold;" id="t5-n2" name="total_seats">
                                                <option style="font-weight:bold;" value="" disabled selected>Select Students based on course level</option>        
                                                    <option style="font-weight:bold;" value="{{$tutor_courses_yr1_count}}">{{$tutor_courses_yr1_count}} For Year One</option>
                                                    <option style="font-weight:bold;" value="{{$tutor_courses_yr2_count}}">{{$tutor_courses_yr2_count}} For Year Two</option>
                                                    <option style="font-weight:bold;" value="{{$tutor_courses_yr3_count}}">{{$tutor_courses_yr3_count}} For Year Three</option>
                                                    <option style="font-weight:bold;" value="{{$tutor_courses_yr4_count}}">{{$tutor_courses_yr4_count}} For Year Four</option>     
                                                </select> --}}
                                            
                                            <h5>Total available students</h5> 
                                            <input style="font-weight:bold;" id="total_seats" type="text" name="total_seats" class="validate">
                                            
                                        </div>

                                        <div class="input-field col s6">
                                                <h5>Practical Inclusive?</h5>
                                                <select id="is_practical" name="is_practical">
                                                    <option value="" disabled selected>Practical inclusive</option>
                        
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                   
                                                </select>
                                        </div>


                                    </div>



                                    

                                        <div class="row">
                                                <div class="input-field col s6">
                                                   <h5>Course Periods(No. of times course will be taught)</h5> 
                                                    <input style="font-weight:bold;" id="periods" type="text" name="periods" class="validate">
                                                </div>
                                                <div class="input-field col s6">
                                                   
                                                    <h5>Duration Per Period</h5>
                                                    <input style="font-weight:bold;" id="addCourseDurationPerPeriod" type="text" name="duration_per_period" class="validate" placeholder="Enter number in hours">
                                                    {{-- <label for="duration_per_period">Duration Per Period In Hours</label> --}}
                                                   
                                                </div>
                                                
                                            </div>


                                    <div class="row">

                                           
                                            <div class="input-field col s6">
                                                    <h5>Status</h5>
                                                    <select id="t5-n8" name="semester_id">
                                                        <option value="" disabled selected>Select Status</option>
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
                                                    <option value="" disabled selected>Select Semester</option>
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
                                            <textarea style="font-weight:bold;" id="t5-n6" class="materialize-textarea" name="detail" placeholder="Brief about this course"></textarea>
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
                            {{-- end of form --}}





                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


 @endsection