$(document).ready(function () {
    $("input.num_order_in_cart").change(function () {
        var id = $(this).attr('data-id');
        var num_order = $(this).val();
        var data = {
            id: id,
            num_order: num_order,
        };
        $.ajax({
            type: "post",
            url: "?mod=cart&action=add_in_cart",
            data: data,
            dataType: "text",
            success: function (data) {
                // $("input.num_order_" + id).val(num_order);
                $(".sub_total_" + id).text(data);
                // $(".total").text(data.total_price);
            },
            // error: function (xhr, ajaxOptions, thrownError) {
            //     alert(xhr.status);
            //     alert(thrownError);
            // }
        });
    });
});