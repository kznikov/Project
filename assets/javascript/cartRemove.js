$(document).ready(function() {
	
	 $('.remove_item').on('click', function(event) {
		  if (confirm("Сигурен ли сте, че искате да премахнете този артикул от количката?")) {
        	 event.preventDefault();

            $.ajax({
                type : 'GET', 
                url : 'removeFromCart.php?'+$(this).attr('href') 
            })
               
                .done(function(data) {
        
                    console.log(data); 
                   //$("#cart_div").html(data);
                   window.location.reload();              
                    	
                });
		  }else{
			  event.preventDefault();  
		  }
            
        });
});