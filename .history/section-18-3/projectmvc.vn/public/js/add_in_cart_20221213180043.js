$(document).ready(function () {
    $("input.num_order_in_cart").change(function () {
        var id = $(this).attr('data-id');
        var num_order = $(this).val();
        var data = {
            id: id,
            num_order: num_order,
        };
        $.ajax({
            type: "method",
            url: "?mod=cart&action=add_in_cart",
            data: data,
            dataType: "json",
            success: function (data) {
                $("input.num_order_" + id).val(num_order);
                $(".sub_total_" + id).text(data.sub_total);
                $(".total").text(data.total_price);
            }
        });
    });
});