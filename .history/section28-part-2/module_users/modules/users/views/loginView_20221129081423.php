<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Trang đăng nhập</title>
</head>

<body>
    <style>

    </style>
    <div id="wp-form-login">
        <h1>Đăng nhập</h1>
        <form id="form-login" action="" method="post">
            <input type="text" name="username" id="username" placeholder="Username" value="<?php echo set_value('username') ?>">
            <?php echo form_error('username') ?>
            <input type="password" name="password" id="password" placeholder="Password">
            <?php echo form_error('password') ?>
            <input type="checkbox" name="remember_me" id="remember_me">
            <label for="remember_me">Ghi nhớ đăng nhập</label>
            <input type="submit" name="btn_login" value="ĐĂNG NHẬP">
            <?php echo form_error('login') ?>
        </form>
        <a href="">Quên mật khẩu</a>
    </div>
</body>

</html>