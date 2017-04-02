$(document).ready(function() {

    
    $('#shopping_form').on('submit', function(event) {
        var formData = {
            'category' : $('input[name=category]').val(),
            'quantity' : $('input[name=quantity]').val(),
            'id' : $('input[name=id]').val()
        };

       
        $.ajax({
            type : 'POST', 
            url : 'insertInCart.php', 
            data : formData, 
            contentType: "application/x-www-form-urlencoded;charset=UTF-8",
            dataType : "html", 
                       
        })
           
            .done(function(data) {
                console.log(data); 
            if(data.length < 4){
            	 window.location.reload();        
            }else{
	    		alert(data);
	    		return false;
            }
               //$("#cart_div").html(data);
                    
                	
            });
        
        event.preventDefault();
    });

});