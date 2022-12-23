<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu từ textbox</title>
</head>

<body>
    <?php
    if (isset($_POST['btn_login'])) {
        if (empty($_POST['username'])) {
            echo "Không được để trống Tên đăng nhập.";
        } else {
            $username = $_POST['username'];
            echo $username;
        }
    }
    ?>
    <style>
        label,
        input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <h1>Nhẫn dữ liệu từ textbox</h1>
    <form action="" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>