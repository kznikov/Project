$(document).ready(function(){
    //search option:
    $("#search").mouseenter(function(){
        $("#search-button").css("background-color", "white");
    });
    $("#search").mouseleave(function(){
        $("#search-button").css("background-color", "#efeded");
    });
    
    //currency selector:
    $("#currency-selector, .dropdown-currency").mouseenter(function(){
        $(".dropdown-currency").css("display", "block");
    });
    $("#currency-selector, .dropdown-currency").mouseleave(function(){
        $(".dropdown-currency").css("display", "none");
    });
});



                        
