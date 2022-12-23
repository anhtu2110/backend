$(document).ready(function () {
    $()
    $("input#num-order").change(function(){
    alert($(this).val());
    alert("data-id = "+$(this).attr('data-id'));
    });
});