$(document).ready(function(){
    //Nên nhớ khi làm việc với form chúng ta phải có sự kiện
    $("input#num_order").change(function(){
        $price = $("span#price").text();
        alert($price);
        $.ajax({
            type: "post",
            url: "process.php",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                
            }
        });
    })
});