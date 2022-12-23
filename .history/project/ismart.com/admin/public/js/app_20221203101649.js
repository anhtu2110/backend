$(document).ready(function() {
    $('.nav-link.active .sub-menu').slideDown();
    // $("p").slideUp();

    // $('#sidebar-menu .arrow').click(function() {
    //     $(this).parents('li').children('.sub-menu').slideToggle();
    //     $(this).toggleClass('fa-angle-right fa-angle-down');
    // });
    $("button.dropdown").click(function(){
        $(this).next().toggleClass('d-block');
    });
    $("button.dropdown-toggle").click(function(){
        $(this).next().toggleClass('d-block');
    });
    // $("*").not("button.dropdown","button.dropdown-toggle").click(function(){
    //     $('.dropdown-menu').removeClass('d-block');
    // });
    $("i.arrow").click(function(){
        $("i.arrow").not(this).removeClass('rotate');
        $("i.arrow").not(this).next('ul.sub-menu').slideUp(350);
        $(this).toggleClass('rotate');
        $(this).next('ul.sub-menu').slideToggle(350);
        $(this).parent('li.nav-link').toggleClass('active');
    })
    $("input[name='checkall']").click(function() {
        var checked = $(this).is(':checked');
        $('.table-checkall tbody tr td input:checkbox').prop('checked', checked);
    });
});