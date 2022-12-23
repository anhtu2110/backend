$(document).ready(function () {
    $("a.add-to-cart").click(function(){
        alert("data-id = ".$(this).attr('data-id'));
    });
});