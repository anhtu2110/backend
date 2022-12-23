$(document).ready(function(){
    //Nên nhớ khi làm việc với form chúng ta phải có sự kiện
    // $("input#num_order").change(function(){
    //     var price = $("span#price").text();
    //     var num_order = $(this).val();
    //     var data = {
    //         price : price,
    //         num_order: num_order,
    //     };
    //     $.ajax({
    //         type: 'POST', //POST hoặc GET, mặc định là GET
    //         url: 'process.php', // Trang xử lý mặc định trang hiện tại
    //         data: data, // Dữ liệu truyền lên server
    //         dataType: 'json', // html, text, script hoặc json
    //         success: function (data) {
    //             //Xử lý dữ liệu trả về
    //             $("input#num_order").text(data['num_order']);
    //             $("span#total").text(data['total']);
    //         },
    //         error: function(xhr, ajaxOptions, thrownError) {
    //             alert(xhr.status);
    //             alert(thrownError);
    //         }
    //     });
    // })
    $("input#num_order").change(function(){
        var num_order = $(this).val();
        var price = $("#price").text();
        var data = {
            num_order: num_order,
            price: price,
        }
        $.ajax({
            type: "POST",
            url: "process.php",
            data: data,
            dataType: "json",
            success: function (data) {
                
            }
        });
    });
});