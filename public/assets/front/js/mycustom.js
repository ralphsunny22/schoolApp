$().ready(function(){
	// Validate Register form on keyup and submit
	$("#registerForm").validate({
		rules:{
			name:{
				required:true,
				minlength:2,
				accept: "[a-zA-Z]+"
			},
			password:{
				required:true,
				minlength:6
            },
            confirm_password:{
				required:true,
				minlength:6,
				equalTo:"#myPassword"
			},
			email:{
				required:true,
				email:true,
				remote:"/check-email"
            },
            reg_number:{
				required:true,
				remote:"/check-reg_number"
            },
            gender:{
				required:true,
			},
			level:{
				required:true,
			},
			department:{
				required:true,
            },
            phone_number:{
                required:true,
                phoneUS: true
            }
            
		},
		messages:{
			name:{ 
				required:"Please enter your Name",
				minlength: "Your Name must be atleast 2 characters long",
				accept: "Your Name must contain letters only"		
			}, 
			password:{
				required:"Please provide your Password",
				minlength: "Your Password must be atleast 6 characters long"
            },
            confirm_password:{
				required:"Please provide your Confirm Password",
				equalTo: "This does not match your password above"
            },
            
			email:{
				required: "Please enter your Email",
				email: "Please enter valid Email",
				remote: "Email already exists!"
            },
            reg_number:{
				required: "Please enter your Registration number",
				remote: "Registration number already exists!"
            },
            gender:{
				required: "Please select your Gender",
			},
			level:{
				required: "Please select your Level",
			},
			department:{
				required: "Please select your Department",
            },
            phone_number:{
                required: "Please select your Phone Number",
                phoneUS: "Please enter a valid Phone number",
			}
		}
	});




//GRADESTAFF FORM
	$("#gradeStaffForm").validate({
		rules:{
			a1:{
				required: true,
				min: 1,
				max: 5,
				digits: true,
				
			},
			a2:{
				required: true,
				min: 1,
				max: 5,
				// step: 1,
        		digits: true,
			},
            a3:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a4:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a5:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
            a6:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a7:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a8:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a9:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a10:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a11:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a12:{
				required: true,
        		min: 1,
        		digits: true,
			},
			a13:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a14:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a15:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a16:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a17:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a18:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a19:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
			a20:{
				required: true,
				min: 1,
				max: 5,
        		digits: true,
			},
            
		},
		messages:{
			a1:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please enter whole number (ex. 1,2,3,4,5)",
						
			}, 
			a2:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
            a3:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
            
			a4:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a5:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a6:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a7:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a8:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a9:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a10:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a11:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a12:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a13:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a14:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				integer: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a15:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a16:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a17:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a18:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a19:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
			a20:{ 
				required:"Required field",
				min: "Please select positive number",
				max: "Please select positive maximum number of 5",
				digits: "Please select whole number (ex. 1,2,3,4,5)"		
			},
		},

		// errorLabelContainer: '#errors',
		// errorLabelContainer: '#errors2'

	});

























	// Validate Register form on keyup and submit
	$("#accountForm").validate({
		rules:{
			name:{
				required:true,
				minlength:2,
				accept: "[a-zA-Z]+"
			},
			address:{
				required:true,
				minlength:6
			},
			city:{
				required:true,
				minlength:2
			},
			state:{
				required:true,
				minlength:2
			},
			country:{
				required:true
			}
		},
		messages:{
			name:{ 
				required:"Please enter your Name",
				minlength: "Your Name must be atleast 2 characters long",
				accept: "Your Name must contain letters only"		
			}, 
			address:{
				required:"Please provide your Address",
				minlength: "Your Address must be atleast 10 characters long"
			},
			city:{
				required:"Please provide your City",
				minlength: "Your City must be atleast 2 characters long"
			},
			state:{
				required:"Please provide your State",
				minlength: "Your State must be atleast 2 characters long"
			},
			country:{
				required:"Please select your Country"
			},
		}
	});

	// Validate Login form on keyup and submit
	$("#loginForm").validate({
		rules:{
			email:{
				required:true,
				email:true
			},
			password:{
				required:true
			}
		},
		messages:{
			email:{
				required: "Please enter your Email",
				email: "Please enter valid Email"
			},
			password:{
				required:"Please provide your Password"
			}
		}
	});

	$("#passwordForm").validate({
		rules:{
			current_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			new_pwd:{
				required: true,
				minlength:6,
				maxlength:20
			},
			confirm_pwd:{
				required:true,
				minlength:6,
				maxlength:20,
				equalTo:"#new_pwd"
			}
		},
		errorClass: "help-inline",
		errorElement: "span",
		highlight:function(element, errorClass, validClass) {
			$(element).parents('.control-group').addClass('error');
		},
		unhighlight: function(element, errorClass, validClass) {
			$(element).parents('.control-group').removeClass('error');
			$(element).parents('.control-group').addClass('success');
		}
	});

	// Check Current User Password
	$("#current_pwd").keyup(function(){
		var current_pwd = $(this).val();
		$.ajax({
			headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
			type:'post',
			url:'/check-user-pwd',
			data:{current_pwd:current_pwd},
			success:function(resp){
				/*alert(resp);*/
				if(resp=="false"){
					$("#chkPwd").html("<font color='red'>Current Password is incorrect</font>");
				}else if(resp=="true"){
					$("#chkPwd").html("<font color='green'>Current Password is correct</font>");
				}
			},error:function(){
				alert("Error");
			}
		});
	});

	// Password Strength Script
	$('#myPassword').passtrength({
      minChars: 4,
      passwordToggle: true,
      tooltip: true,
      //eyeImg : "/assets/front/images/eye.svg"
    });

    // Copy Billing Address to Shipping Address Script
    $("#copyAddress").click(function(){
    	if(this.checked){
    		$("#shipping_name").val($("#billing_name").val());
    		$("#shipping_address").val($("#billing_address").val());
    		$("#shipping_city").val($("#billing_city").val());
    		$("#shipping_state").val($("#billing_state").val());
    		$("#shipping_pincode").val($("#billing_pincode").val());
    		$("#shipping_mobile").val($("#billing_mobile").val());
    		$("#shipping_country").val($("#billing_country").val());
    	}else{
    		$("#shipping_name").val('');
    		$("#shipping_address").val('');
    		$("#shipping_city").val('');
    		$("#shipping_state").val('');
    		$("#shipping_pincode").val('');
    		$("#shipping_mobile").val('');
    		$("#shipping_country").val('');
    	}
    });


// Password Strength Script
// $('#myPassword').passtrength({
//     minChars: 4,
//     passwordToggle: true,
//     tooltip: true,
//     eyeImg : "/assets/front/images/eye.svg"
//   });





});