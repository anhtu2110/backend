$(document).ready(function(){
    //Nên nhớ khi làm việc với form chúng ta phải có sự kiện
    $("input#num_order").change(function(){
        var price = $("span#price").text();
        var num_order = $(this).val();
        $data = {
            price : price,
            num_order: num_order,
        }
        $.ajax({
            type: POST,
            url: "process.php",
            data: data,
            dataType: "text",
            success: function (data) {
                
            }
        });
    })
});