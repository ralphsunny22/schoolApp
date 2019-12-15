@extends('front.layout.main')

    @section('extra_css')
        <link href="{{asset('assets/front/css/passtrength.css')}}" rel="stylesheet" />    
    @endsection

@section('content')

    
 <!--SECTION START-->
 <section class="c-all p-semi">
    <div class="semi-inn">
        <div class="semi-com semi-left">
            <div class="all-title quote-title qu-new semi-text">
                <h2>Login page</h2>
                <p>Enter your acurate details.</p>
                
                <div class="form-group mar-bot-0">
                    <div class="col-md-12">
                            <p style="color:#fff;">Not Registered before?</p>
                        {{-- <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="PROCEED TO LOGIN" class="waves-button-input"></i> --}}
                        <i class="waves-effect waves-light light-btn waves-input-wrapper"><a href="{{route('loginPage')}}" style="color:#fff;">SIGN UP HERE</a></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="semi-com semi-right">
            <div class="n-form-com semi-form">
                <div class="col s12">

                <form class="form-horizontal" id="loginForm" name="loginForm" method="POST" action="{{route('loginPost')}}">
                    @csrf
                        
                        {{-- <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" name="reg_number" class="form-control" placeholder="Registration number" autocomplete="true" required>
                            </div>
                        </div> --}}
                        
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