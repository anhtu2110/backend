$(document).ready(function () {
    $("a.add-to-cart").click(function(){
        var id = $(this).attr('data-id');
        alert($("input.num-order-"+id).val());
        var qty = $("input.num-order-"+id).val();
        var data = {
            id: id,
            qty: qty,
        };
        $.ajax({
            type: "POST",
            url: "?mod=cart&action=add&id="+id,
            data: data,
            dataType: "json",
            success: function (data) {
                
            }
        });
        error: function(xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert(thrownError);
        };
    });
});