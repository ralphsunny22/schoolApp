
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Education Evaluation Master</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('assets/front/fonts/font-awesome.min.css')}}">
    <!-- ALL CSS FILES -->
    <link href="{{asset('assets/admin/css/materialize.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{asset('assets/admin/css/style-mob.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
    <![endif]-->


    

    {{-- for timepicker --}}
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css"> --}}

    {{-- ///for datetimepicker --}}
    <script src="{{asset('assets/admin/js/datetimepicker/jquery.min.js')}}"></script> 

    @yield('extra_css')
</head>



@include('partials.datetime')



<body>


@php
    //$department = \App\Department::where('id',$user->department)->firstOrFail();
@endphp



    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index.html" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href=""><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="admin-all-enquiry.html" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-admission-enquiry.html" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    



    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img id="adminImg" src="/assets/admin/images/main/small/{{$tutor->image ? $tutor->image : 'tutor.jpg'}}" alt="">
                        </li>
                        <li>
                            <h5>{{$tutor->name}} - Lecturer </h5>
                        </li>
                        <li>
                            <div>
                                <form id="mainImg" action="{{route('adminUserUpdate', $tutor->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="image" value="" id="img_lecturer" style="display:none;">
                                </form>
                                
                            </div>
                            
                        </li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="{{route('adminDashboard', $tutor->id)}}" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
						
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i>Courses</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    {{-- <li><a href="#">All Course</a>
                                    </li> --}}
                                    <li><a href="{{route('addCourse', $tutor->id)}}">Add New Course</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                      
                       
                    </ul>
                </div>
            </div>


         

            <!--== BODY INNER CONTAINER ==-->
            @yield('content') 

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="{{asset('assets/admin/js/main.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/materialize.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/custom.js')}}"></script>



    @yield('extra_script')
</body>

{{-- datetime under body --}}
<link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/datetimepicker/jquery.datetimepicker.min.css')}}"/>
<script src="{{asset('assets/admin/js/datetimepicker/jquery.datetimepicker.js')}}"></script> 


{{-- select the file input (using a id would be faster --}}
<script>
//onClick of image, hidden input file shld also click
    $("img#adminImg").click(function() {
        $("input#img_lecturer").click();
    });
            
    //once the hidden input file is clicked, post the file data
    $('input#img_lecturer').change(function() { 
        // select the form and submit
        $('form#mainImg').submit(); 
    });
</script>



{{-- <script>
        //For edit course page
            $("img#editCourseImgClass").click(function() {
                $("input.editCourseImageInputFileClass").click();
            });
                    
            //once the hidden input file is clicked, post the file data
            $('input#editCourseImageInputFileClass').change(function() { 
                // select the form and submit
                $('formeditCourseImgFormClass').submit(); 
            });
        </script> --}}







<script>      
    $(document).ready(function() {
    // show the alert
    setTimeout(function() {
        $(".alert").alert('close');
    }, 10000);
});
   
   </script>

</html>