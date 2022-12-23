$(document).ready(function() {
    $('.nav-link.active .sub-menu').slideDown();
    // $("p").slideUp();

    // $('#sidebar-menu .arrow').click(function() {
    //     $(this).parents('li').children('.sub-menu').slideToggle();
    //     $(this).toggleClass('fa-angle-right fa-angle-down');
    // });
    $("button.dropdown").click(function(){
        $(this).next('dropdown-menu.show').toggleClass('d-block');
    });
    // $("#sidebar-menu li.nav-link").click(function(){
    //     $("#sidebar-menu li.nav-link").not(this).find('i.arrow').removeClass('rotate');
    //     $("#sidebar-menu li.nav-link").not(this).removeClass('active');
    //     $("#sidebar-menu li.nav-link").not(this).find('ul.sub-menu').slideUp(350);
    //     $(this).find('i.arrow').toggleClass('rotate');
    //     $(this).toggleClass('active');
    //     $(this).find('ul.sub-menu').slideToggle(350);
    //     return false;
    // });
    $("i.arrow").click(function(){
        $("i.arrow").not(this).removeClass('rotate');
        $(this).toggleClass('rotate');
    })
    $("input[name='checkall']").click(function() {
        var checked = $(this).is(':checked');
        $('.table-checkall tbody tr td input:checkbox').prop('checked', checked);
    });
});