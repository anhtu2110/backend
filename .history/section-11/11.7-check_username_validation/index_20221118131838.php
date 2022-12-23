<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuẩn hóa dữ liệu Form đăng nhập</title>
</head>

<body>
    <?php
    require '../lib/validation.php';
    ?>
    <?php
    if (isset($_POST['btn_login'])) {
        $error = array(); // Phất cờ
        if (empty($_POST['username'])) {
            //Hạ cờ
            $error['username'] = "Không được để trống trường Username";
        } else {
            if (strlen($_POST['username']) < 6 or strlen($_POST['username']) > 32) {
                $error['username'] = "Username có độ dài từ 6-32 ký tự.";
            } else {
                if (is_username($_POST['username'])) {
                    $username = $_POST['username'];
                } else {
                    $error['username'] = "Username không đúng định dạng.";
                }
            }
        }

        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống trường password";
        } else {
            if (strlen($_POST['password']) < 6 && strlen($_POST['password']) > 32) {
                $error['password'] = "Password có độ dài từ 6-32 ký tự.";
            } else {
                if (is_password($_POST['password'])) {
                    $password = $_POST['password'];
                } else {
                    $error['password'] = "Password không đúng định dạng.";
                }
            }
        }

        //Kết luận
        if (empty($error)) {
            //Xử lý không có lỗi
            echo "Username: {$username} <br> Password: {$password}";
        }
    }
    ?>
    <style>
        label,
        input {
            display: block;
            margin-bottom: 10px;
        }

        p.error {
            color: red;
        }
    </style>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Name: </label>
        <input type="text" name="username" id="username" value="<?php if (!empty($username)) echo $username ?>">
        <?php echo form_error('username'); ?>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <?php echo form_error('password') ?>
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>