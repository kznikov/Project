var selectedCurrency = "BGN";
$(document).ready(function(){   
    $("#search").mouseenter(function(){
        $("#search-button").css("background-color", "white");
    });
    $("#search").mouseleave(function(){
        $("#search-button").css("background-color", "#efeded");
    });
    $("#currency-selector, .dropdown-currency").mouseenter(function(){
        $(".dropdown-currency").css("display", "inline-block");
    });
    $(".dropdown-currency").mouseleave(function(){
        $(".dropdown-currency").css("display", "none");
    });
    
    //doesn't work:
    $("#EUR").click(function() {
        selectedCurrency = "EUR";
    });
    $("#BGN").click(function() {
        selectedCurrency = "BGN";
    });
});





