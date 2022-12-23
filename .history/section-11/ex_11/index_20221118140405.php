<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập phần 11</title>
</head>

<body>
    <?php
    require '../lib/validation_ex.php';
    if (isset($_POST['btn_reg'])) {
        $error = array();
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Fullname không được để trống.";
        } else {
            if (strlen($_POST['fullname']) < 6 or strlen($_POST['fullname']) > 32) {
                $error['fullname'] = "Fullname có độ dài từ 6-32 ký tự.";
            } else {
                $fullname = $_POST['fullname'];
            }
        }

        if (empty($_POST['username'])) {
            $error['username'] = "Username không được để trống.";
        } else {
            if (strlen($_POST['username']) or strlen($_POST['username'])) {
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
            $error['password'] = "Password không được để trống.";
        } else {
            if (strlen($_POST['password']) < 6 or strlen($_POST['password']) > 32) {
                $error['password'] = "Password có độ dài từ 6-32 ký tự.";
            } else {
                if (is_password($_POST['password'])) {
                    $password = $_POST['password'];
                } else {
                    $error['password'] = "Password không đúng định dạng";
                }
            }
        }

        if (empty($_POST['num_phone'])) {
            $error['num_phone'] = "Số điện thoại không được để trống.";
        } else {
            if (is_num_phone($_POST['num_phone'])) {
                $num_phone = $_POST['num_phone'];
            } else {
                $error['num_phone'] = "Số điện thoại không đúng định dạng.";
            }
        }
    }
    ?>
    <style>
        label,
        input {
            display: block;
            margin-block: 8px;
        }

        p.error {
            color: red;
        }
    </style>
    <h1>Đăng ký</h1>
    <form action="" method="post">
        <label for="fullname">Họ và tên: </label>
        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname') ?>">
        <?php echo form_error('fullname') ?>
        <label for="username">Tên đăng nhập: </label>
        <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>">
        <?php echo form_error('username') ?>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <?php echo form_error('password') ?>
        <label for="num_phone">Số điện thoại: </label>
        <input type="text" name="num_phone" id="num_phone">
        <?php echo form_error('num_phone') ?>
        <input type="submit" name="btn_reg" value="Đăng ký">
    </form>
</body>

</html>