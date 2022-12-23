<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu form từ Drop-down list trong php</title>
</head>

<body>
    <?php
    if (isset($_POST['btn_reg'])) {
        if (isset($_POST['btn_reg'])) {
            # code...
        }
    }
    ?>
    <h1>Đặt hàng</h1>
    <style>
        select {
            text-align: center;
        }

        input {
            display: block;
            margin-top: 15px;
        }
    </style>
    <form action="" method="post">
        <select name="" id="">
            <option value="">--Chọn--</option>
            <option value="cod" selected>Thanh toán tại nhà</option>
            <option value="banking">Thanh toán qua Thẻ tín dụng</option>
        </select>
        <input type="submit" name="btn_reg" value="Register">
    </form>
</body>

</html>