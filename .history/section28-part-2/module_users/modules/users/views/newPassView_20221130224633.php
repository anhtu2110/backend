<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Thiết lập lại mật khẩu</title>
</head>

<body>
    <style>

    </style>
    <div id="wp-form-login">
        <h1 class="title_newPass">Thiết lập lại mật khẩu</h1>
        <form id="form-login" action="" method="post">
            <input type="password" name="password" id="password" placeholder="Password">
            <?php echo form_error('password') ?>
            <input type="submit" name="btn_new_pass" value="ĐỔI MẬT KHẨU">
            <?php echo form_error('login') ?>
            <?php echo form_success('change_pass') ?>
        </form>
        <span><a href="?mod=users&action=login" style="  color: #0293f3;
">Đăng nhập</a> | <a href="?mod=users&action=reg" style="color: gray;">Đăng ký</a></span>
    </div>
</body>

</html>