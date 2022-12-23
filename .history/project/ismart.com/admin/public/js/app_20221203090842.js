$(document).ready(function() {
    $('.nav-link.active .sub-menu').slideDown();
    // $("p").slideUp();

    // $('#sidebar-menu .arrow').click(function() {
    //     $(this).parents('li').children('.sub-menu').slideToggle();
    //     $(this).toggleClass('fa-angle-right fa-angle-down');
    // });

    $("#sidebar-menu li.nav-link").click(function(){
        $("#sidebar-menu li.nav-link").not(this).find('i').removeClass('rotate');
        $("#sidebar-menu li.nav-link").removeClass('active');
        $("#sidebar-menu li.nav-link").not(this).find('ul.sub-menu').slideUp(250);
        $(this).find('i').toggleClass('rotate');
        $(this).addClass('active');
        $(this).find('ul.sub-menu').slideToggle(250);
        return false;
    });
    $("input[name='checkall']").click(function() {
        var checked = $(this).is(':checked');
        $('.table-checkall tbody tr td input:checkbox').prop('checked', checked);
    });
});