$(document).ready(function () {
    $("a.add-to-cart").click(function () { 
        // $("input#amount").change(function(){
        //     alert($(this).val());
        // });
        alert($("input#amount").text());
    });
});