$(document).ready(function () {
    $("a.add-to-cart").click(function(){
        var id = $(this).attr('data-id');
        alert($("input.num-order-"+id).val());
        var qty = $("input.num-order-"+id).val();
        var data = {
            id : id,
            qty : qty,
        };
        $.ajax({
            type: "GET",
            url: "?mod=cart&controller=index&action=add&id="+id,
            data: data,
            dataType: "text",
            success: function (data) {
                
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
        
    });
});