$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('#page-titele').Addclass("sticky");
        } else {
            $('#page-titele').Removeclass("sticky");
        }  
    });
});
