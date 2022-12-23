<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Khôi phục mật khẩu</title>
</head>

<body>
    <style>

    </style>
    <div id="wp-form-login">
        <h1 class="title_reset">KHÔI PHỤC MẬT KHẨU</h1>
        <form id="form-login" action="" method="post">
            <input type="email" name="email" id="email" placeholder="Email" value="<?php echo set_value('email') ?>">
            <?php echo form_error('email') ?>
            <input type="submit" name="btn_reset" value="GỬI YÊU CẦU">
            <?php echo form_error('reset') ?>
        </form>
        <span><a href="" style="  color: #0293f3;
">Đăng nhập</a> | <a href="" style="color: gray;">Đăng ký</a></span>

    </div>
</body>

</html>