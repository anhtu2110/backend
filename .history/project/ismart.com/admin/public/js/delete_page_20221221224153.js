$(document).ready(function () {
    $("a.delete_page").click(function () {
        var id = $(this).attr('data-id');
        $.ajax({
            type: "post",
            url: "?mod=page&action=delete_page_ajax",
            data: "data",
            dataType: "dataType",
            success: function (response) {

            }
        });
    });
});