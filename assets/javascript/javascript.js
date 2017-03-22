var imported = document.createElement('script');
imported.src = './image_zoom.js';
document.head.appendChild(imported);


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
				console.log(form_data);
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
			
			
			
			
			
			$('#form_opinion :text').on('input', function () {				
				if($(this).val().trim()){
					$(this).removeClass("invalid").addClass("valid");
				}else{
					$(this).removeClass("valid").addClass("invalid");
				}
			});
			
			
			
			$('#opinion_opinion').on('input', function () {
				if($(this).val().trim()){
					$(this).removeClass("invalid").addClass("valid");
				}else{
					$(this).removeClass("valid").addClass("invalid");
				}
			});
					
			
			$("#submit_opinion").click(function(event){				
				var form_data=$("#form_opinion").serializeArray();
				var error_free=true;
				if(form_data.length == 4){
					form_data.splice(0,1);
				}
				console.log(form_data);
				for (var input in form_data){
					var element=$("#opinion_"+form_data[input]['name']);
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
	
	
	
	function openPic() {
	    document.getElementById("myNav").style.height = "100%";
	}

	function closePic() {
	    document.getElementById("myNav").style.height = "0%";
	}

	
	
	new ImageZoom("#sec_img>img", {
	    maxZoom: 2,
	    deadarea: 0.1,

    });

	
	function show(x){
		var a = x.querySelector("#like");
		var b = x.querySelector("#compare");
		a.style.display = "block";
		b.style.display = "block";
	}

	function hide(x) {
		var a = x.querySelector("#like");
		var b = x.querySelector("#compare");
		a.style.display = "none";
		b.style.display = "none";
	}
	
	
	
	function changePic(x) {
		var large = document.querySelector('#sec_img > img');
		//var large_name = large.getAttribute('src');
		document.querySelector('.overlay-content img').setAttribute("src", x.getAttribute('src'));
		//large.removeAttribute("src");
		large.setAttribute("src", x.getAttribute('src'));
		//x.setAttribute("src", large_name);
		console.log();
		new ImageZoom("#sec_img>img", {
		    maxZoom: 2,
		    deadarea: 0.1,

	    });
	}
	
	
	function showFeatures(){
		var opinion = document.getElementById('opinion');
		var features = document.getElementById('features');
		opinion.style.display = 'none';
		features.style.display='block';
		var buttonFeat = document.getElementById('features_button');
		var buttonOp = document.getElementById('opinion_button');
		buttonFeat.classList.remove("close_button");
		buttonFeat.classList.add("open_button");
		buttonOp.classList.remove("open_button");
		buttonOp.classList.add("close_button");
		
	}
	
	function showOpinions(){
		var opinion = document.getElementById('opinion');
		var features = document.getElementById('features');
		opinion.style.display = 'block';
		features.style.display='none';
		var buttonFeat = document.getElementById('features_button');
		var buttonOp = document.getElementById('opinion_button');
		buttonFeat.classList.remove("open_button");
		buttonFeat.classList.add("close_button");
		buttonOp.classList.remove("close_button");
		buttonOp.classList.add("open_button");

	}
	
	
	$('input:checkbox').click(function() {
	    $('input:checkbox').not(this).prop('checked', false);
	});  
	
	
	