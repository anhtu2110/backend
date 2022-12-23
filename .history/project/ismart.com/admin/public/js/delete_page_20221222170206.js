$(document).ready(function () {
    $("a.delete_page").click(function () {
        var id = $(this).attr('data-id');
        var data = {
            id: id,
        }
        $.ajax({
            type: "post",
            url: "?mod=page&action=delete_page_ajax",
            data: data,
            dataType: "text",
            success: function (result) {
                $("tbody.list_page").html(result);
                return false;
            }
        });
    });
});