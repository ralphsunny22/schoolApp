@extends('front.layout.main')

    @section('extra_css')
          
    @endsection

	{{-- <script src="https://cdn.rawgit.com/hilios/jQuery.countdown/2.2.0/dist/jquery.countdown.min.js" type="application/javascript"></script> --}}

@section('content')

	<section>
        <div class="head-2" style="padding-top:10px;">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    {{-- <h1>List of College Departments</h1> --}}
					<p style="color:cornsilk;font-weight:bold;"> Welcome {{$user->name}}. Quiz : {{$course->course_code}}. Attempt all questions by ticking any box in the option</p>
<p style="color:cornsilk;font-weight:normal;">If you finish before expiration time, make sure to click <span class="bb-link"><a id="submitAllQuizId" class="submitAllQuiz" style="font-weight:bolder;" onMouseOver="this.style.cursor='pointer'">SUBMIT</a></span> button. Your answers are automatically submitted, once time expires</p>

					{{-- .bb-link a {
						border: 1px solid #fff;
						color: #fff;
						border-radius: 50px;
						padding: 15px 20px;
						line-height: 60px;
					} --}}

                    <div class="event-head-sub">
                        <ul>
                            <li>{{$question_id->course->semester->name}}  </li>
                            <li>Per Question Score: {{$question_id->expected_score}}</li>
							<li style="display:none;">Duration: {{$question_id->que_time}}</li>
							
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>	
	
    <!--SECTION START-->
    <section>
        <div class="ed-res-bg">
		<div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-rsear">
                        <div class="ed-rsear-in">
                            <div class="col-md-6">
							</div>
                        </div>
					</div>

					@php
						// $questions = \App\Question::paginate(1);
						// $question_id = \App\Question::where('id',true)->get();
						// $question_options = \App\Question::where('id',$question_id->id);
					@endphp
					
					{{-- left-right-cover --}}
                    <div class="ed-about-sec1">
					@foreach ($questions as $question)
                        <div class="col-md-12" style="display:none;">

								

								{{-- @foreach ($questions as $question) --}}
								<div class="ed-rese-grid ed-rese-grid-mar-bot-30">
									<div class="ed-rsear-img ed-faci-full-top">
										<img src="images/facilities/1.jpg" alt="">
									</div>
								<form class="userOption2" action="{{route('userScoreUpdate', [$question->id, $user->id])}}" method="POST">
											@csrf
									<div class="ed-rsear-dec ed-faci-full-bot">
										<h4>{{$question->detail}}</h4>
										
										{{-- <input type="checkbox" name="option_A" value="{{$question->option_A}}" class="filled-in" id="filled-in-box-1" style="margin-top:6px;">
										<label for="filled-in-box-1"></label> --}}
										<input type="text" value="{{$question->option_A}}" class="read-line-btn" style="background-color:white; border: 1px solid black; font-size: 15px;">
										<input type="text" value="{{$question->option_B}}" class="read-line-btn" style="background-color:white; border: 1px solid black; font-size: 15px;">
										<input type="text" value="{{$question->option_C}}" class="read-line-btn" style="background-color:white; border: 1px solid black; font-size: 15px;">
										<input type="text" value="{{$question->option_D}}" class="read-line-btn" style="background-color:white; border: 1px solid black; font-size: 15px;">
										
										<input class="submitEachQuiz" type="submit" value="submit">
									

										
									</div>
								</form>
									
								</div>
							
						
									
						</div>
						{{-- end of left hand side --}}

					
						<form class="userOption" action="{{route('userScoreUpdate', [$question->id, $user->id])}}" method="POST">
							@csrf
                        <div class="col-md-12">
								{{-- <h4>{{$question->detail}}</h4> --}}
						
							<div class="ed-rese-grid ed-rese-grid-mar-bot-30" style="padding-left:5px;">
									
								<h4>{{$question->detail}}</h4>
								@php
									$check_diff1 = mt_rand(100000,999999)
								@endphp
									<div class="ed-rsear-dec">
									<input type="checkbox" name="option_A" value="{{$question->option_A}}" class="filled-in" id="filled-in-box-{{$check_diff1}}">
									<label for="filled-in-box-{{$check_diff1}}"><label>
									<h4>{{$question->option_A}}</h4>
								</div>

								@php
									$check_diff2 = mt_rand(100000,999999)
								@endphp
								<div  class="ed-rsear-dec">
									<input type="checkbox" name="option_B" value="{{$question->option_B}}" class="filled-in" id="filled-in-box-{{$question->id + 1}}">
									<label for="filled-in-box-{{$question->id + 1}}"><label>
									<h4>{{$question->option_B}}</h4>
								</div>

								@php
									$check_diff3 = mt_rand(100000,999999)
								@endphp
								<div  class="ed-rsear-dec">
									<input type="checkbox" name="option_C" value="{{$question->option_C}}" class="filled-in" id="filled-in-box-{{$check_diff3}}">
									<label for="filled-in-box-{{$check_diff3}}"><label>
									<h4>{{$question->option_C}}</h4>
								</div>

								@php
									$check_diff4 = mt_rand(100000,999999)
								@endphp
								<div  class="ed-rsear-dec">
									<input type="checkbox" name="option_D" value="{{$question->option_D}}" class="filled-in" id="filled-in-box-{{$check_diff4}}">
									<label for="filled-in-box-{{$check_diff4}}"><label>
									<h4>{{$question->option_D}}</h4>
								</div>

									
							</div>
						
							{{-- <input type="hidden" name="option_correct" value="{{$question->option_correct}}"> --}}
							
						</div>
						<input class="submitEachQuiz" type="submit" value="zxcvbnm" style="visibility:hidden;">
						</form>
						{{-- end of left hand side --}}

						@endforeach

					</div>
					{{-- left-right-cover --}}


                </div>
            </div>
        </div>
		</div>
    </section>
    <!--SECTION END-->


    <!--SECTION START-->
    @section('extra_script')
		<script>
//toggle divs bg color
			// $(".ed-rese-grid").click(function () {
   			// 	$(this).toggleClass("green");
			// });

//toggle divs bg, keepin others off
			// $('.ed-rese-grid').on('click', function(){
    		// 	$(this).addClass('green');
			// 	$(this).siblings().removeClass('green');

			// });

			
//toggle checkbox, keepon others off 
			// $('input.filled-in').on('change', function() {
    		// 	$('input.filled-in').not(this).prop('checked', false);  
			// 	//$('form#userOption').submit();
			// });

		</script>




<script>
		// Set the date we're counting down to
		var countDownDate = new Date("{{$question->que_date}} {{$question->que_time}}").getTime();
		//var countDownDate = new Date("Dec 8, 2019 016:07:25").getTime(); //for testing
		
		// Update the count down every 1 second
		var x = setInterval(function() {
		
		  // Get today's date and time
		  var now = new Date().getTime();
			
		  // Find the distance between now and the count down date
		  var distance = countDownDate - now;
			
		  // Time calculations for days, hours, minutes and seconds
		  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
			
		  // Output the result in an element with id="demo"
		  document.getElementById("demo").innerHTML = hours + "h "
		  + minutes + "m " + seconds + "s ";
			
		  // If the count down is over, write some text 
		  if (distance < 0) {
			
			clearInterval(x)
			//alertt();
			//alert('yes');
			document.getElementById("demo").innerHTML = "EXPIRED";
			$(".submitEachQuiz").click();
//if(document.getElementById("demo").innerHTML = "EXPIRED"){
// 	submitQuestions();
// }

		  }
		}, 1000);
	</script>


<script>


function submitQuestions () {
	$(".submitAllQuiz").click(function() {
	confirm('Are you sure, you want to submit');
	sendAm();
    });
  }

function sendAm(){
	$(".submitEachQuiz").click();
}

submitQuestions();

function alertt(){
	alert('yes');
}

</script>






	@endsection
	
	


	
@endsection