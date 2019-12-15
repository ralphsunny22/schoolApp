@extends('admin.layout.main')

@section('content')

             <!--== BODY INNER CONTAINER ==-->
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
    
                    <!--== User Details ==-->
                    <div class="sb2-2-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-inn-sp">
                                    <div class="inn-title">
                                        <h4>Course Details</h4>
                                        <p>All about courses, program structure, fees, best course lists (ranking), syllabus, teaching techniques and other details.</p>
                                    </div>
                                    <div class="tab-inn">
                                        <div class="table-responsive table-desi">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Course Code</th>
                                                        <th>Faculty</th>
                                                        <th>Durations</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Total Seats</th>
                                                        <th>Status</th>
                                                        <th>View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @php
                                                    $courses = \App\Course::all();
                                                @endphp
                                                @foreach($courses as $item)
                                                    <tr>
                                                        <td><span class="list-img"><img src="/assets/admin/images/course/small/{{$item->image}}" alt=""></span>
                                                        </td>
                                                        <td><a href="admin-course-details.html"><span class="list-enq-name">{{$item->name}}</span><span class="list-enq-city">Illunois, United States</span></a>
                                                        </td>
                                                        <td>{{$item->faculty->name}}</td>
                                                        <td>{{$item->duration}}</td>
                                                        <td>{{$item->start_date}}</td>
                                                        <td>{{$item->end_date}}</td>
                                                        <td>{{$item->total_seats}}</td>
                                                        <td>
                                                            <span class="label label-success">Active</span>
                                                        </td>
                                                        <td><a href="admin-course-details.html" class="ad-st-view">Edit</a></td>
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


 @endsection