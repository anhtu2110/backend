$(document).ready(function() {
    $('.nav-link.active .sub-menu').slideDown();
    // $("p").slideUp();

    // $('#sidebar-menu .arrow').click(function() {
    //     $(this).parents('li').children('.sub-menu').slideToggle();
    //     $(this).toggleClass('fa-angle-right fa-angle-down');
    // });
    $("button.btn.dropdown").click(function(){
        $(this).next('.dropdown-menu.show').addClass('d-block');
    });
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