$(document).ready(function () {
    $(".compare").on('click', (function () {
        var compareId = this.id;
        $(`#form-${compareId}`).submit();
    }));
});

