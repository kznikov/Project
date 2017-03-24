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
               //$("#cart_div").html(data);
               window.location.reload();              
                	
            });
        
        event.preventDefault();
    });

});