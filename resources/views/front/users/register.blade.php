@extends('front.layout.main')

    @section('extra_css')
        <link href="{{asset('assets/front/css/passtrength.css')}}" rel="stylesheet" />    
    @endsection

@section('content')

    
 <!--SECTION START-->
 <section class="c-all p-semi">
    <div class="semi-inn">
        <div class="semi-com semi-left" style="30% !important;">
            <div class="all-title quote-title qu-new semi-text">
                <h2 style="color:#f36b3b;">Student Register Form</h2>
                <hr>
                <p style="color:#fff;">Please, make sure all your entries are accurate.</p>
                <p style="color:#fff;">Upon registration, a Student Registration ID will be automatically generated for you.</p>
                <p style="color:#fff;">Take note of that ID, for further notice.</p>
                <hr>
                <div class="form-group mar-bot-0">
                    <div class="col-md-12">
                            <p style="color:#fff;">Registered and activated before?</p>
                        {{-- <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="PROCEED TO LOGIN" class="waves-button-input"></i> --}}
                        <i class="waves-effect waves-light light-btn waves-input-wrapper"><a href="{{route('loginPage')}}" style="color:#fff;">PROCEED TO LOGIN</a></i>
                    </div>
                </div>
               
            </div>
        </div>

        



        <div class="semi-com semi-right">
            <div class="n-form-com semi-form">
                <div class="col s12">

                <form class="form-horizontal" id="registerForm" name="registerForm" method="POST" action="{{route('registerPost')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Full name" autocomplete="true" required>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" name="reg_number" class="form-control" placeholder="Registration number" autocomplete="true" required>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <div class="col-md-12">
                                {{-- <div class="input-field col s12"> --}}
                                    <select id="gender" name="gender_id">
                                      <option value="" disabled selected>Select Gender</option>
                                      @php
                                          $genders = \App\Gender::all();
                                      @endphp
                                      @foreach ($genders as $gender)
                                        <option value="{{$gender->id}}">{{$gender->status}}</option>
                                      @endforeach
                                      
                                      
                                    </select>
                                {{-- </div> --}}
                            </div>
                        </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="number" name="phone_number" class="form-control" placeholder="Phone number" autocomplete="true" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                    <div class="col-md-12">
                                        {{-- <div class="input-field col s12"> --}}
                                            <select id="level" name="level_id">
                                              <option value="" disabled selected>Select Level</option>
                                              @php
                                                  $levels = \App\Level::all();
                                              @endphp
                                              @foreach ($levels as $level)
                                                <option value="{{$level->id}}">{{$level->name}}</option>
                                              @endforeach
                                              
                                              
                                            </select>
                                        {{-- </div> --}}
                                    </div>
                                </div>

                                <div class="form-group">
                                        <div class="col-md-12">
                                            {{-- <div class="input-field col s12"> --}}
                                                <select id="department" name="department_id">
                                                  <option value="" disabled selected>Select Department</option>
                                                  @php
                                                      $depts = \App\Department::all();
                                                  @endphp
                                                  @foreach ($depts as $dept)
                                                    <option value="{{$dept->id}}">{{$dept->name}}</option>
                                                  @endforeach
                                                  
                                                  
                                                </select>
                                            {{-- </div> --}}
                                        </div>
                                    </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" name="email" class="form-control" placeholder="Email" autocomplete="true" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" id="myPassword" name="password" class="form-control" placeholder="Password" autocomplete="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" name="confirm_password" class="form-control" placeholder="Confirm password" autocomplete="true">
                            </div>
                        </div>

                        {{-- <div class="form-group">
                                <div class="col-md-12">
                                    <input type="file" name="image">
                                </div>
                            </div> --}}


                            <div class="row form-group">
                                    <div id="main_photo2" class="file-field input-field col s12" style="left:7px;">
                                        <div class="btn admin-upload-btn">
                                            <span>Upload photo</span>
                                            <input type="file" name="image">
                                        </div>
                                        {{-- <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Event image">
                                        </div> --}}
                                    </div>
                                </div>


                        <div class="form-group mar-bot-0">
                            <div class="col-md-12">
                                <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="SUBMIT" class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
</section>
<!--SECTION END-->

    @section('extra_script')

        <script src="{{asset('assets/front/js/jquery.js')}}"></script>
        <script src="{{asset('assets/front/js/jquery.validate.js')}}"></script>
        <script src="{{asset('assets/front/js/mycustom.js')}}"></script>
        <script src="{{asset('assets/front/js/passtrength.js')}}"></script>

    @endsection

@endsection