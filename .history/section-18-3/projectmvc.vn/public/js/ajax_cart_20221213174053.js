$(document).ready(function () {
    $("a.add-to-cart").click(function () {
        var id = $(this).attr('data-id');
        var qty = $("input.num-order-" + id).val();
        var data = {
            id: id,
            qty: qty,
        };
        // alert('id = '+id+' - qty = '+qty);
        $.ajax({
            type: "POST",
            url: "?mod=cart&action=add&id=" + id,
            data: data,
            dataType: "json",
            success: function (data) {
                $("input.num_order_" + id).val(data.qty);
                $(".sub_total_" + id).text(data.sub_total);
                $(".total").text(data.total);
            },
            // error: function(xhr, ajaxOptions, thrownError) {
            //     alert(xhr.status);
            //     alert(thrownError);
            // }
        });

    });
    $("input.num_order_in_cart").change(function () {
        var id = $(this).attr('data-id');
        var num_order = $(this).val();
        var data = {
            id: id,
            num_order: num_order,
        };
        $.ajax({
            type: "POST",
            url: "?mod=cart&action=add_in_cart",
            data: data,
            dataType: "JSON",
            success: function (result) {
                $("td.sub_total_" + id).text(result.sub_total);
                $(".total").text(result.total_price);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});