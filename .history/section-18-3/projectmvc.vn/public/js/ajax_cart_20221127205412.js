$(document).ready(function () {
    $("a.add-to-cart").click(function(){
        var id = $(this).attr('data-id');
        var qty = $("input.num-order-"+id).val();
        var data = {
            id : id,
            qty : qty,
        };
        $.ajax({
            type: "POST",
            url: "?mod=cart&action=add&id="+id,
            data: data,
            dataType: "text",
            success: function (data) {
                alert("Kết nối thành công");
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
        
    });
});