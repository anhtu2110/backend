<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./js/jquery-3.6.1.min.js"></script>
    <title>Ajax kết quả trả về kiểu text</title>
</head>

<body>
    <div id="result-text">
        <strong>Kiểu dữ liệu trả về kiểu json</strong>
    </div>
    <input type="button" name="clickme" value="text-click" id="text-click" value="Get List-user by Text">
    <script>
        $(document).ready(function() {
            $("#text-click").click(function() {
                $.ajax({
                    type: "post",
                    url: "text.php",
                    // data: "text",
                    dataType: 'text',
                    success: function(result) {
                        $("#result-text").html(result);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                    }
                });
            });
        });
    </script>
</body>

</html>