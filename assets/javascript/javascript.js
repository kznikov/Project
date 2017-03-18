$(document).ready(function(){
			$('input[name="email"]').on('input', function() {
				var input=$(this);
				var re =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var is_email=re.test(input.val());
				if(is_email){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
			});
		
		
		
			$('input[name*="name"]').on('input', function() {
				var input=$(this);
				var is_name=input.val();
				if(is_name.trim()){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
			});
			
	
			
			$('input[name*="pass"]').keyup(function() {
			    str = $(this).val();
			    str = str.replace(/\s/g,'');
			    $(this).val(str);
			});
		
		
			$('input[name*="pass"]').on('input', function() {
				var input=$(this);
				var is_pass=(input.val().trim().length >= 6);
				if(is_pass){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
			});
			
			
			
			
			
			$("#login_submit").click(function(event){
				var element=$("#login_email");
				if(element.attr('value') != ""){
					element.addClass("valid");
				}
				if(!element.val()){
					element.removeClass("valid").addClass("invalid");
				}
				
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
			
		
			
			$("#create_submit").click(function(event){
				var form_data=$("#personal_data").serializeArray();
				form_data = form_data.slice(0,3);
					for (var input in form_data){
						var element=$("#create_"+form_data[input]['name']);
						if(element.attr('value') != ""){
							element.addClass("valid");
						}
						if(!element.val()){
							element.removeClass("valid").addClass("invalid");
						}
					}
			});
			
			
			
			$('#create_confpass').on('input', function() {
				var confpassword=$(this);
				var password=$('#create_password');
				var is_pass=(confpassword.val().length >= 6 && confpassword.val() == password.val());
				if(is_pass){
					confpassword.removeClass("invalid").addClass("valid");
				}else{
					confpassword.removeClass("valid").addClass("invalid");
				}
			});
			
			
			$("#create_submit").click(function(event){	
	            var password = $("#create_password").val();
	            var confirmPassword = $("#create_confpass").val();
	            var element=$("#create_confpass");
	            var error_element=$("span", element.parent());
	            if (password != confirmPassword) {
	            	$("#personal_data div:nth-child(9) span:nth-child(3)").text('Моля уверете се, че паролите съвпадат.');
	            	error_element.removeClass("error").addClass("error_show"); 
	            }
	        });
			
			
			
			$("#create_submit").click(function(event){
				var form_data=$("#personal_data").serializeArray();
				if(form_data.length == 6){
					form_data.splice(3,1);
				}
				
				console.log(form_data); 
				var error_free=true;
				for (var input in form_data){
					var element=$("#create_"+form_data[input]['name']);
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
			
			
	
			
			$(".hide").hide();
			$(".hide_check").click(function() {
			    if($(this).is(":checked")) {
			        $(".hide").show();	
			    } else {
			        $(".hide").hide();
			       		       
			    }
			});

						
			$("#edit_submit").click(function(event){	
	            if (!$('.hide').is(":visible")) {
	            	$("#edit_oldpass").removeAttr('name');
	            	$("#edit_newpass").removeAttr('name');
	            	$("#edit_confpass").removeAttr('name');
	            }else{
	            	$('#edit_oldpass').attr('name', 'oldpass');
	            	$('#edit_newpass').attr('name', 'newpass');
	            	$('#edit_confpass').attr('name', 'confpass');
	            }    
	        });
						
			
			$("#edit_submit").click(function(event){
				var form_data=$("#edit_data").serializeArray();
				if(form_data.length == 3){
					for (var input in form_data){
						var element=$("#edit_"+form_data[input]['name']);
						if(element.attr('value') != ""){
							element.addClass("valid");
						}
						if(!element.val()){
							element.removeClass("valid").addClass("invalid");
						}
					}
				}else{
					form_data = form_data.slice(0,3);
					for (var input in form_data){
						var element=$("#edit_"+form_data[input]['name']);
						if(element.attr('value') != ""){
							element.addClass("valid");
						}
						if(!element.val()){
							element.removeClass("valid").addClass("invalid");
						}
					}
				}
			});
		
				
			
			$("#edit_submit").click(function(event){				
				var form_data=$("#edit_data").serializeArray();
				
				if(form_data.length == 7){
					form_data.splice(3,1);	
				}
				
				var input=$('#edit_email');
				var re =  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var is_email=re.test(input.val());
				if(is_email){
					input.removeClass("invalid").addClass("valid");
				}else{
					input.removeClass("valid").addClass("invalid");
				}
				
				
				console.log(form_data); 	
				
				var error_free=true;
				for (var input in form_data){
					var element=$("#edit_"+form_data[input]['name']);
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
				 
				
			$('#edit_confpass').on('input', function() {
				var confpassword=$(this);
				var password=$('#edit_newpass');
				var is_pass=(confpassword.val().length >= 6 && confpassword.val() == password.val());
				if(is_pass){
					confpassword.removeClass("invalid").addClass("valid");
				}else{
					confpassword.removeClass("valid").addClass("invalid");
				}
			});
			
			$("#edit_submit").click(function(event){	
	            var password = $("#edit_newpass").val();
	            var confirmPassword = $("#edit_confpass").val();
	            var element=$("#edit_confpass");
	            var error_element=$("span", element.parent());
	            if (password != confirmPassword) {
	            	$("#edit_data div:nth-child(6) div:nth-child(5) span:nth-child(3)").text('Моля уверете се, че паролите съвпадат.');
	            	error_element.removeClass("error").addClass("error_show"); 
	            }
	        });
			
			
			
			$("#address_submit").click(function(event){
				var form_data=$("#address_data").serializeArray();
					for (var input in form_data){
						var element=$("#edit_"+form_data[input]['name']);
						if(element.attr('value').trim() != "" ){
							element.addClass("valid");
						}
						if(element.hasClass("invalid")){
							element.removeClass("valid").addClass("invalid");
						}
					}
			});
			
			
			$('#address_data :text').on('input', function () {				
				if($(this).val().trim()){
					$(this).removeClass("invalid").addClass("valid");
				}else{
					$(this).removeClass("valid").addClass("invalid");
				}
			});
			
			
			$("#edit_phone").on('input', function () {				
				if($.isNumeric($(this).val().trim())){
					$(this).removeClass("invalid").addClass("valid");
				}else{
					$(this).removeClass("valid").addClass("invalid");
				}
			});
			
					
			
			$("#address_submit").click(function(event){				
				var form_data=$("#address_data").serializeArray();
				var error_free=true;
				for (var input in form_data){
					var element=$("#edit_"+form_data[input]['name']);
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



	$(function() {
		$(".pagination li").hover(function() {
		    $(this).find('a').css("color", "white");
	        }, function(){
	        	$(this).find('a').css("color", "grey");
        });
	});
	
	$(function() {
		$("#pages  li").hover(function() {
		    $(this).find('a').css("color", "white");
	        }, function(){
	        	$(this).find('a').css("color", "grey");
        });
	});

	
	$(function() {
		$("#search_news").click(function(event) {
			var value = $('#search_box').val();
			if(value == ""){
				event.preventDefault(); 
			}
        });
	});
	
	
	$(function() {
		$(".cat_prod").hover(function(event) {
			$(this).find('h4').css("color", "#b63b42");
		}, function(){
        	$(this).find('h4').css("color", "#727272");
        });
	});
	
	
	
	/*$("#order").change(function() {
	     this.form.submit();
	});
	
	
	$("#count").change(function() {
	     this.form.submit();
	});*/

	$('#order').change(function(){
	    $('#order_form').submit();    
	});
	
	
	$('#count').change(function(){
	    $('#count_form').submit();    
	});
	