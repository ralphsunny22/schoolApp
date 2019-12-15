@extends('front.layout.main')
@section('content')

<!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="{{asset('assets/front/images//1.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Performance <span>Evaluation</span> Master</h2>
                        <p>There are many pages of this website that helps to make evaluation more simple</p>
                        <a href="{{route('registerPage')}}" class="bann-btn-1">Get Started</a><a style="display:none;" href="{{route('registerPage')}}" class="bann-btn-2">Click me</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('assets/front/images/2.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Admission open <span>2018</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">Admission</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('assets/front/images//3.jpg')}}" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Education <span>Master</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section> 

    <!-- QUICK LINKS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                    <ul>
                        <li>
                            <a href="awards.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic1.png" alt=""> Academy</a>
                        </li>
                        <li>
                            <a href="admission.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic2.png" alt=""> Admission</a>
                        </li>
                        <li>
                            <a href="all-courses.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic4.png" alt=""> Courses</a>
                        </li>
                        <li>
                            <a href="seminar.html" class="waves-effect waves-light btn-large wed-pop-ser-btn"><img src="images/icon/h-ic3.png" alt=""> Seminar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> 

    <!-- DISCOVER MORE -->
    {{-- <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Discover <span>More</span></h2>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="about.html">
                                <img src="images/h-about.jpg" alt="">
                                <span>Academics</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="admission.html">
                                <img src="images/h-adm1.jpg" alt="">
                                <span>Admission</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="dashboard.html">
                                <img src="images/h-cam.jpg" alt="">
                                <span>Students profile</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="research.html">
                                <img src="images/h-res.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="all-courses.html">
                                <img src="images/h-about1.jpg" alt="">
                                <span>Couse</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="db-time-line.html">
                                <img src="images/h-adm.jpg" alt="">
                                <span>Exam Time Line</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="seminar.html">
                                <img src="images/h-cam1.jpg" alt="">
                                <span>Seminar 2018</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="events.html">
                                <img src="images/h-res1.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}

@endsection