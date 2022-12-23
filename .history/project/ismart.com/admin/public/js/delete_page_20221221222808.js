$(document).ready(function () {
    $("a.delete_page").click(function () {
        var id = $(this).attr('data-id');
        console.log(id);
    });
});