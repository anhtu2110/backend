$(document).ready(function () {
    $("a.add-to-cart").click(function(){
        var id = $(this).attr('data-id');
        alert($("input.num-order-"+id).val());
    });
});