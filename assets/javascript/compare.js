$(document).ready(function () {
    //add item to list:
    $(".compare").on('click', (function () {
        var compareId = this.id;
        $(`#form-${compareId}`).submit();
    }));
    
    //clear button:
    $("#clear-comparison-list-button").on('click', (function () {
        $("#clear-comparison-list-form").submit();
    }));
});

