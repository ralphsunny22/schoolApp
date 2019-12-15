@extends('admin.layout.deanMain')

@section('content')



@php
//$tutor = \App\Tutor::where('id', $user->id)->firstOrFail();
//$courses = \App\Course::where('tutor_id', $tutor->id)->get();

//$department = \App\Department::where('')

@endphp

<div class="sb2-2">
    <!--== breadcrumbs ==-->
    <div class="sb2-2-2">
        <ul>
            <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            </li>
            <li class="active-bre"><a href="#"> Dashboard</a>
            </li>
            <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
            </li>
        </ul>
    </div>
    <!--== DASHBOARD INFO ==-->
    <div class="sb2-2-1">
        <h2>Dean Dashboard</h2>
        <p>The list of Lecturers available in this faculty. Click on any of them to see their performance ratio so far</p>
        <div class="db-2" style="display:none;">
            <ul>
                <li>
                    <div class="dash-book dash-b-1">
                        <h5>All Departmrnts</h5>
                        <h4>444</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-2">
                        <h5>All Lectures</h5>
                        <h4>555</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-3">
                        <h5>Students</h5>
                        <h4>689</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
                <li>
                    <div class="dash-book dash-b-4">
                        <h5>Enquiry</h5>
                        <h4>24</h4>
                        <a href="#">View more</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--== User Details ==-->


{{-- //TUTOR STUDENTS --}}
    <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            
                            <h4>Lecturer Details</h4>
                            {{-- <p></p> --}}
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Fullname</th>
                                            <th>Staff ID</th>
                                            <th>Department</th>
                                           
                                            <th>Performance</th>       
                                            
                    
                                        </tr>
                                    </thead>
                                    <tbody>
    
                                    @foreach ($tutors as $tutor)
         
                                        <tr>
                                            <td><span class="list-img"><img class="editCourseImgClass" src="/assets/front/images/register/small/default_user.png" alt=""></span>
                                            </td>

                                            <div>
                                                    <form id="editCourseImgFormClass" action="{{route('adminUserUpdate', $tutor->id)}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="file" name="image" value="" class="editCourseImageInputFileClass" style="display:none;">
                                                    </form>
                                                    
                                                </div>


                                            <td style="color: #263238;">{{$tutor->name}}</td>
                                            <td>{{$tutor->staff_id}}</td>
                                            <td><a href="admin-student-details.html"><span class="list-enq-name">{{$tutor->department->name}}</span><span class="list-enq-city">Faculty of {{$tutor->department->faculty->name}}</span></a>
                                            </td>
                                            
                                    
                                            
                                            <td><a href="{{route('performanceProfile', $tutor->id)}}" class="ad-st-view">View</a></td>
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