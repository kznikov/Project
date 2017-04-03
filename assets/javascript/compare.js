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
    
    //remove product from compare page:
    $(".remove_item").on('click', (function () {
        var itemId = this.id;
        $(`#del-form-${itemId}`).submit();
    }));
    
    //remove product from compare drop-down list:
    $(".remove-item").on('click', (function () {
        var itemId = this.id;
        $(`#form-comparelist-${itemId}`).submit();
    }));
    
    //add item to wishlist from compare page:
    $(".compare-page-save-button").on('click', (function () {
        var itemId = this.id;
        $(`#saveToWl-form-${itemId}`).submit();
    }));
    
    //add item to wishlist from products page:
    $(".like").on('click', (function () {
        var itemId = this.id;
        $(`#form-wish-${itemId}`).submit();
    }));
    
    //remove item from wishlist:
    $(".wl-del-button").on('click', (function () {
        var itemId = this.id;
        $(`#form-wlDel-${itemId}`).submit();
    }));
        
});

