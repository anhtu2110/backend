$(document).ready(function () {
    $("a.add-to-cart").click(function(){
        $("input#num-order").change(function(){
            alert($(this).val());
            alert("data-id = "+$(this).attr('data-id'));
            });
    });
});