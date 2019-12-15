@extends('admin.layout.main')

@section('content')

@section('extra_css')

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}



@endsection

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                    <!--== breadcrumbs ==-->
                    <div class="sb2-2-2">
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                            </li>
                            <li class="active-bre"><a href="#">Add New Quiz</a>
                            </li>
                            <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                            </li>
                        </ul>
                    </div>
    
                    <!--== User Details ==-->
                    @php
                        //  $department = \App\Department::where('id',$course->department)->firstOrFail();
                        //  $faculty = \App\Faculty::where('id',$department->faculty)->firstOrFail();
                    @endphp
                    <div class="sb2-2-3">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                        <h4 style="font-weight:400;">Quiz for {{$course->course_code}}, {{$course->name}}, 
                                            {{$course->department->name}} Department, Faculty of {{$course->department->faculty->name}}, Year {{$course->semester->name}}</h4>

                                        

                                     {{-- SESSION SECTION --}}
                                    {{-- @if(Session::has('success'))
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
                                    @endif  --}}

                                </div>

                                

                                    <div class="tab-inn">
                                        <form method="POST" enctype="multipart/form-data" action="{{route('adminQuizStore', $course->id)}}">
                                            @csrf

                                            <div class="row">
                                                <div class="input-field col s4">
                                                <input id="datetimepicker" type="text" name="que_date" class="validate" required>
                                                    <label class="">Date and time</label>
                                                </div>

                                                <div class="input-field col s4">
                                                <input id="start_timepicker" type="text" name="que_start_time" class="validate" required>
                                                    <label class="">Start time</label>
                                                </div>
                                                
                                                <div class="input-field col s4">
                                                    <input type="text" name="que_time" id="timepicker" class="validate" required>
                                                    <label class="">Duration</label>
                                                </div>
                                            </div>


                                            <div class="row">
                                                    <div id="expected_score" style="width:50%; margin-left:25%; margin-right:25%;" class="input-field col s12">
                                                        <input type="text" name="expected_score" value="" class="validate" required>
                                                        <label style="text-align:center;" class="">Expected Score</label>
                                                    </div>
                                                    
                                                </div>


                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <textarea name="detail"></textarea>
                                                    <label class="">Details</label>
                                                </div>
                                            </div>

                                        {{-- <div class="row">
                                                <div class="input-field col s6">
                                                    <input type="text" name="expected_score" value="" class="validate" required>
                                                    <label class="">Expected Score</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input type="text" name="course_id" value="" class="validate" required>
                                                    <label class="">D</label>

                                                    {{-- <select class="validate" name="course_id">
                                                            <option value="" disabled selected>Select Course</option>
                                                        @php
                                                            $courses = \App\Course::all();
                                                        @endphp
                                                        @foreach ($courses as $item)
                                                          <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select> 
                                                </div>
                                            </div> --}}
                                            

                                           


                                           

                                            {{-- OPTIONZ --}}
                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <input type="text" name="option_A" value="" class="validate">
                                                    <label class="">OPTION A</label>
                                                </div>
                                                <div class="input-field col s6">
                                                    <input type="text" name="option_B" value="" class="validate">
                                                    <label class="">OPTION B</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="input-field col s6">
                                                        <input type="text" name="option_C" value="" class="validate">
                                                        <label class="">OPTION C</label>
                                                    </div>
                                                    <div class="input-field col s6">
                                                        <input type="text" name="option_D" value="" class="validate">
                                                        <label class="">OPTION D</label>
                                                    </div>
                                                </div>

                                            <div class="row">
                                                <div class="file-field input-field col s12">
                                                    <div class="btn admin-upload-btn">
                                                        <span>File</span>
                                                        <input type="file" name="image">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" placeholder="Event image">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                    <div class="input-field col s6">
                                                        <input type="text" name="option_correct" value="" class="validate">
                                                        <label class="">Correct Answer</label>
                                                    </div>
                                                </div>

                                            <div class="row">
                                                <div class="input-field col s6">
                                                    <i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" class="waves-button-input"></i>
                                                </div>

                                                <div class="input-field col s6">
                                                    @if(Session::has('success'))
                                                        <div class="alert alert-success alert-block">
                                                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                                                <strong>{!! session('success') !!}</strong>
                                                        </div>
                                                    @endif
                                                    @if(Session::has('error'))
                                                        <div id="alat" class="alert alert-error alert-block" style="background-color:#f4d2d2">
                                                        <button type="button" class="close" data-dismiss="alert">×</button> 
                                                            <strong>{!! session('error') !!}</strong>
                                                    </div>
                                                    @endif
                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

            @section('extra_js')

           {{-- <script>
           
            window.setTimeout(function () {
                $("#alat").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 5000);
           
           </script> --}}


             @endsection
 @endsection
