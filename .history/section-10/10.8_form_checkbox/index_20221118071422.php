<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhạn dữ liệu từ checkbox</title>
</head>

<body>
    <?php
    if (isset($_POST['btn_reg'])) {
        # code...
    }
    ?>
    <style>
        input[type='submit'] {
            display: block;
            margin-top: 10px;
        }
    </style>
    <h1>Đăng ký</h1>
    <form action="" method="post">
        <input type="checkbox" name="rules" value="yes" id="rules">
        <label for="rules">Tôi đồng ý</label>
        <input type="submit" name="btn_reg" value="Register">
    </form>
</body>

</html>