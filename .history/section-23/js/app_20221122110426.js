$(document).ready(function(){
    //Nên nhớ khi làm việc với form chúng ta phải có sự kiện
    $("input#num_order").change(function(){
        alert("ĐÃ thay đổi dữ liệu.");
        $.ajax({
            type: "method",
            url: "url",
            data: "data",
            dataType: "dataType",
            success: function (response) {
                
            }
        });
    })
});