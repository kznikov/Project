		//login
		$(document).ready(function() {
			$('#login_email').on('input', function() {
				var input=$(this);
				var re =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var is_email=re.test(input.val());
				if(is_email){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
			});
		
			$('#login_password').on('input', function() {
				var input=$(this);
				var is_name=input.val();
				if(is_name){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
			});
			
			$("#login_submit").click(function(event){
				var form_data=$("#log_in").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#login_"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){
						error_element.removeClass("error").addClass("error_show"); 
						error_free=false;
					}else{
						error_element.removeClass("error_show").addClass("error");
					}
				}
				if (!error_free){
					event.preventDefault(); 
				}
			});
		});
		
		//creat account
		$(document).ready(function() {
			$('#creat_name').on('input', function() {
				var input=$(this);
				var is_name=input.val();
				if(is_name){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
			});
			
			$('#creat_lastname').on('input', function() {
				var input=$(this);
				var is_name=input.val();
				if(is_name){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
			});
		
		
		
			$('#creat_email').on('input', function() {
				var input=$(this);
				var re =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var is_email=re.test(input.val());
				if(is_email){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
			});
		
			$('#creat_password').on('input', function() {
				var input=$(this);
				var is_pass=(input.val().length >= 6);
				if(is_pass){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
			});
			
			
			$('#creat_password').keyup(function() {
			    str = $(this).val();
			    str = str.replace(/\s/g,'');
			    $(this).val(str);
			});
			
			$('#creat_confpass').keyup(function() {
			    str = $(this).val();
			    str = str.replace(/\s/g,'');
			    $(this).val(str);
			});
			
			
			
			
			$('#creat_confpass').on('input', function() {
				var confpassword=$(this);
				var password=$('#creat_password');
				var is_pass=(confpassword.val().length >= 6 && confpassword.val() == password.val());
				if(is_pass){
					confpassword.removeClass("invalid").addClass("valid");
				}else{
					confpassword.removeClass("valid").addClass("invalid");
				}
			});
			
			$("#creat_submit").click(function(event){
				var form_data=$("#personal_data").serializeArray();
				//console.log(form_data);
				if(form_data.length == 6){
					form_data.splice(3,1)
				}
				
				
				console.log(form_data); 
				var error_free=true;
				for (var input in form_data){
					var element=$("#creat_"+form_data[input]['name']);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){
						error_element.removeClass("error").addClass("error_show"); 
						error_free=false;
					}else{
						error_element.removeClass("error_show").addClass("error");
					}
				}
				if (!error_free){
					event.preventDefault(); 
				}
			});
			
			
			
			$("#creat_submit").click(function(event){	
		            var password = $("#creat_password").val();
		            var confirmPassword = $("#creat_confpass").val();
		            var element=$("#creat_confpass");
		            var error_element=$("span", element.parent());
		            if (password != confirmPassword) {
		            	$("#personal_data div:nth-child(10) span:nth-child(3)").text('Моля уверете се, че паролите съвпадат.');
		            	error_element.removeClass("error").addClass("error_show"); 
		            }
		        });
			
		});