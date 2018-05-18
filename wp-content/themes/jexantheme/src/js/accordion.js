$(document).ready(function() {
    $('.accordion h3').each(function(index) {
        $(this).click(function(e) {
            $(this).next('div').toggle();
            $(this).siblings('h3').removeClass('active');
            $(this).siblings('h3').next('div').hide();
            $(this).toggleClass('active');
        });
    });
});