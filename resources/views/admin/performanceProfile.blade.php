
<!DOCTYPE html>
<html lang="en">
        {{--section after 'sf-submit' for up & 'full-bot-book' for down --}}
<head>
    <title>Education Master Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{asset('assets/front/fonts/font-awesome.min.css')}}">
    
    <!-- ALL CSS FILES -->
    <link href="{{asset('assets/front/css/materialize.css')}}" rel="stylesheet">
    <link href="{{asset('assets/front/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/front/css/style.css')}}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{asset('assets/front/css/style-mob.css')}}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
    <![endif]-->
    
    @yield('extra_css')
</head>

<body>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="index.html"><img src="images/logo.png" alt="" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>All Courses</h4>
                            <ul>
                                <li><a href="course-details.html">Accounting/Finance</a></li>
                                <li><a href="course-details.html">civil engineering</a></li>
                                <li><a href="course-details.html">Art/Design</a></li>
                                <li><a href="course-details.html">Marine Engineering</a></li>
                                <li><a href="course-details.html">Business Management</a></li>
                                <li><a href="course-details.html">Journalism/Writing</a></li>
                                <li><a href="course-details.html">Physical Education</a></li>
                                <li><a href="course-details.html">Political Science</a></li>
                                <li><a href="course-details.html">Sciences</a></li>
                                <li><a href="course-details.html">Statistics</a></li>
                                <li><a href="course-details.html">Web Design/Development</a></li>
                                <li><a href="course-details.html">SEO</a></li>
                                <li><a href="course-details.html">Google Business</a></li>
                                <li><a href="course-details.html">Graphics Design</a></li>
                                <li><a href="course-details.html">Networking Courses</a></li>
                                <li><a href="course-details.html">Information technology</a></li>
                            </ul>
                            <h4>User Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                            </ul>
                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="admission.html">Admission</a></li>
                                <li><a href="all-courses.html">All courses</a></li>
                                <li><a href="course-details.html">Course details</a></li>
                                <li><a href="awards.html">Awards</a></li>
                                <li><a href="seminar.html">Seminar</a></li>
                                <li><a href="events.html">Events</a></li>
                                <li><a href="event-details.html">Event details</a></li>
                                <li><a href="event-register.html">Event register</a></li>
                                <li><a href="contact-us.html">Contact us</a></li>
                            </ul>
                            <h4>User Profile</h4>
                            <ul>
                                <li><a href="dashboard.html">User profile</a></li>
                                <li><a href="db-courses.html">Courses</a></li>
                                <li><a href="db-exams.html">Exams</a></li>
                                <li><a href="db-profile.html">Prfile</a></li>
                                <li><a href="db-time-line.html">Time line</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Contact: Lake Road, Suite 180 Farmington Hills, U.S.A.</a>
                                </li>
                                <li><a href="#">Phone: +101-1231-1231</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                                </li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="index.html"><img src="images/logo.png" alt="" />
                            </a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="/">Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details.html">Accounting/Finance</a></li>
                                            <li><a href="course-details.html">civil engineering</a></li>
                                            <li><a href="course-details.html">Art/Design</a></li>
                                            <li><a href="course-details.html">Marine Engineering</a></li>
                                            <li><a href="course-details.html">Business Management</a></li>
                                            <li><a href="course-details.html">Journalism/Writing</a></li>
                                            <li><a href="course-details.html">Physical Education</a></li>
                                            <li><a href="course-details.html">Political Science</a></li>
                                            <li><a href="course-details.html">Sciences</a></li>
                                            <li><a href="course-details.html">Statistics</a></li>
                                            <li><a href="course-details.html">Web Design/Development</a></li>
                                            <li><a href="course-details.html">SEO</a></li>
                                            <li><a href="course-details.html">Google Business</a></li>
                                            <li><a href="course-details.html">Graphics Design</a></li>
                                            <li><a href="course-details.html">Networking Courses</a></li>
                                            <li><a href="course-details.html">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->


    <!--SECTION START-->
    <section>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="dashboard.html">PERFORMANCE PLATFORM</a></li>
                        {{-- <li><a href="db-profile.html" class="pro-act">Profile</a></li>
                        <li><a href="db-courses.html">Courses</a></li>
                        <li><a href="db-exams.html">Exams</a></li>
                        <li><a href="db-time-line.html">Time Line</a></li>
                        <li><a href="#">Entry</a></li>
                        <li><a href="#">Notifications</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">
                        <img id="imgFile" src="/assets/admin/images/main/small/{{$tutor->image}}" alt="user">
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4>{{$tutor->name}}</h4>
                            </li>
                            <li>Tutor ID: {{$tutor->staff_id}} </li>
                            <li><a href="#!"><i class="fa fa-facebook"></i> Facebook: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-google-plus"></i> Google: my sample</a></li>
                            <li><a href="#!"><i class="fa fa-twitter"></i> Twitter: my sample</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4><img src="images/icon/db1.png" alt="" />Lecturer's Performance Index</h4>
                            <p>See performance based on questions answered by <b>{{$number_of_users_that_participated}}</b> students of the department, on a scale of 1-5</p>
                            <div class="sdb-tabl-com sdb-pro-table">
                                <table class="responsive-table bordered">
                                    <tbody>
                                        <tr>
                                            <td><strong>Attribute</strong></td>
                                            <td>:</td>
                                            <td><strong>Value</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Information presented/covered in the course</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value1}}</td>
                                        </tr>
                                        <tr>
                                            <td>The Lecturer's level of knowlegde of the course</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value2}}</td>
                                        </tr>
                                        <tr>
                                            <td>The Lecturer's regularity to class</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value3}}</td>
                                        </tr>
                                        <tr>
                                            <td>The Lecturer's puntuality to class</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value4}}</td>
                                        </tr>
                                        <tr>
                                            <td>Class interactive/participatory sessions</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value5}}</td>
                                        </tr>
                                        <tr>
                                            <td>The Lecturer's relationship with the class</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value6}}</td>
                                        </tr>
                                        <tr>
                                            <td>Recommended learning materials and handouts</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value7}}</td>
                                        </tr>
                                        <tr>
                                            <td>Future usefulness of the material presented</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value8}}</td>
                                        </tr>
                                        <tr>
                                            <td>Cost of materials/handout given by the Lecturer</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value9}}</td>
                                        </tr>
                                        <tr>
                                            <td>The Lecturer's delivery of the lectures</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value10}}</td>
                                        </tr>
                                        <tr>
                                            <td>Nature of quiz/continous assessment</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value11}}</td>
                                        </tr>
                                        <tr>
                                            <td>The dressing mode of the Lecturer</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value12}}</td>
                                        </tr>
                                        <tr>
                                            <td>When absent from the lectures, did he inform the class in advance</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value13}}</td>
                                        </tr>
                                        <tr>
                                            <td>Did the Lecturer use ICT(Powerpoint) to deliver lectures? </td>
                                            <td>:</td>
                                            <td>{{$lecturer_value14}}</td>
                                        </tr>
                                        <tr>
                                            <td>Compared to other Lecturers, rate the lecturer</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value15}}</td>
                                        </tr>
                                        <tr>
                                            <td>If the course were not compulsory, would you recommend it to a friend</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value16}}</td>
                                        </tr>
                                        <tr>
                                            <td>The Lecturer sold handouts/materials directly to students</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value17}}</td>
                                        </tr>
                                        <tr>
                                            <td>The Lecturer wrote names of students who purchased the handout/materials</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value18}}</td>
                                        </tr>
                                        <tr>
                                            <td>The Lecturer demanded some form of gratification from the student</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value19}}</td>
                                        </tr>
                                        <tr>
                                            <td>The Lecturer motivated the class to study</td>
                                            <td>:</td>
                                            <td>{{$lecturer_value20}}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Total value</strong></td>
                                            <td>:</td>
                                            <td><strong>{{$total_pt}}</strong></td>
                                        </tr>

                                        <tr>
                                            <td>Expected value</td>
                                            <td>:</td>
                                            <td>{{$expected_score}}</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Percentage value</strong></td>
                                            <td>:</td>
                                            <td><strong>{{$tutorAveragePercentage}}%</strong></td>
                                        </tr>
                                        
                                        

                                        











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


    <!--SECTION START-->
    <section>
        <div class="full-bot-book">
            <div class="container">
                <div class="row">
                    <div class="bot-book">
                        <div class="col-md-2 bb-img">
                            <img src="images/3.png" alt="">
                        </div>
                        <div class="col-md-7 bb-text">
                            <h4>therefore always free from repetition</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                        <div class="col-md-3 bb-link">
                            <a href="course-details.html">Book This Course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

    <!--HEADER SECTION-->
    <section class="wed-hom-footer">
        <div class="container">
            <!--<div class="row">
				<div class="col-md-12">
				<h4>About Wedding Planner</h4>
				<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
				<p>more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
				<p></p>
			  </div>
			  </div>-->
            <div class="row wed-foot-link">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Top Courses</h4>
                    <ul>
                        <li><a href="course-details.html">Accounting/Finance</a></li>
                        <li><a href="course-details.html">civil engineering</a></li>
                        <li><a href="course-details.html">Art/Design</a></li>
                        <li><a href="course-details.html">Marine Engineering</a></li>
                        <li><a href="course-details.html">Business Management</a></li>
                        <li><a href="course-details.html">Journalism/Writing</a></li>
                        <li><a href="course-details.html">Physical Education</a></li>
                        <li><a href="course-details.html">Political Science</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>New Courses</h4>
                    <ul>
                        <li><a href="course-details.html">Sciences</a></li>
                        <li><a href="course-details.html">Statistics</a></li>
                        <li><a href="course-details.html">Web Design/Development</a></li>
                        <li><a href="course-details.html">SEO</a></li>
                        <li><a href="course-details.html">Google Business</a></li>
                        <li><a href="course-details.html">Graphics Design</a></li>
                        <li><a href="course-details.html">Networking Courses</a></li>
                        <li><a href="course-details.html">Information technology</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>HELP & SUPPORT</h4>
                    <ul>
                        <li><a href="#">24x7 Live help</a>
                        </li>
                        <li><a href="#">Contact us</a>
                        </li>
                        <li><a href="#">Feedback</a>
                        </li>
                        <li><a href="#">FAQs</a>
                        </li>
                        <li><a href="#">Safety Tips</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row wed-foot-link-1">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Get In Touch</h4>
                    <p>Address: 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
                    <p>Phone: <a href="#!">+101-1231-4321</a></p>
                    <p>Email: <a href="#!">info@educationmaster.com</a></p>
                </div>
                <div class="col-md-4">
                    <h4>DOWNLOAD OUR FREE MOBILE APPS</h4>
                    <ul>
                        <li><a href="#"><span class="sprite sprite-android"></span></a>
                        </li>
                        <li><a href="#"><span class="sprite sprite-ios"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>SOCIAL MEDIA</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--HEADER SECTION-->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                    <p>Copyrights © 2018 RN53Themes. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
    <section>
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Login</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Login" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Create an Account</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name1" class="validate">
                                <label>User name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" class="validate">
                                <label>Email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" class="validate">
                                <label>Confirm password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello... </h1>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i> Google+</a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Forgot password</h4>
                    <p>Don't have an account? Create your account. It's take less then a minutes</p>
                    <form class="s12">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" class="validate">
                                <label>User name or email id</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1">Are you a already member ? Login</a> | <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2">Create a new account</a> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="icon-float">
            <ul>
                <li><a href="#" class="sh">1k <br> Share</a> </li>
                <li><a href="#" class="fb1"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="gp1"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="tw1"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="li1"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="wa1"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                <li><a href="#" class="sh1"><i class="fa fa-envelope-o" aria-hidden="true"></i></a> </li>
            </ul>
        </div>
    </section>

    <!--Import jQuery before materialize.js-->
    <script src="{{asset('assets/front/js/main.min.js')}}"></script>
    <script src="{{asset('assets/front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/front/js/materialize.min.js')}}"></script>
    <script src="{{asset('assets/front/js/custom.js')}}"></script>
</body>

</html>