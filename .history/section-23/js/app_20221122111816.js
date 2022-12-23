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
            type: 'POST', //POST hoặc GET, mặc định là GET
            url: "process.php", // Trang xử lý mặc định trang hiện tại
            data: data, // Dữ liệu truyền lên server
            dataType: "text", // html, text, script hoặc json
            success: function (data) {
                //Xử lý dữ liệu trả về
                alert(data);
            }
        });
    })
});