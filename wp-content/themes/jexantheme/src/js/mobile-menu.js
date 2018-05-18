$(document).ready(function() {
    $('#menuToggle input:checkbox').change(function(e) {
        $('#menu-mobile .menu').toggle(450);
    });
});