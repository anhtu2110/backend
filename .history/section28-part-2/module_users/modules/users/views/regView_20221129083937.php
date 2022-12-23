<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Trang đăng ký</title>
</head>

<body>
    <style>

    </style>
    <div id="wp-form-login">
        <h1>ĐĂNG KÝ</h1>
        <form id="form-login" action="" method="post">
            <input type="text" name="fullname" placeholder="Fullname" id="fullname" value="<?php echo set_value('fullname') ?>">
            <?php echo form_error('fullname') ?>
            <input type="text" name="username" id="username" placeholder="Username" value="<?php echo set_value('username') ?>">
            <?php echo form_error('username') ?>
            <input type="password" name="password" id="password" placeholder="Password">
            <?php echo form_error('password') ?>
            <input type="email" name="email" id="email" placeholder="Email" value="<?php echo set_value('email') ?>">
            <?php echo form_error('email') ?>
            <?php echo form_error('reg') ?>
            <input type="submit" name="btn_reg" value="ĐĂNG KÝ">
            <?php echo form_error('reg') ?>
        </form>
        <a href="?mod=users&action=login" class="login">ĐĂNG NHẬP</a>
    </div>
</body>

</html>