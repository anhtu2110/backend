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
    $("input.num-order").change(function () {
        alert($(this).attr('data-id');)
});
});