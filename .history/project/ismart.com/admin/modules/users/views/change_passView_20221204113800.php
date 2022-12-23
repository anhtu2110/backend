<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>ĐỔI MẬT KHẨU</title>
</head>

<body>
    <style>

    </style>
    <div id="wp-form-login">
        <h1>ĐỔI MẬT KHẨU</h1>
        <form id="form-login" action="" method="post">
            <input type="password" name="password" id="password" placeholder="Mật khẩu cũ">
            <?php echo form_error('password') ?>
            <input type="password" name="new_pass" id="password" placeholder="Mật khẩu mới">
            <?php echo form_error('password') ?>
            <input type="password" name="re_new_pass" id="password" placeholder="Nhập lại mật khẩu mới">
            <?php echo form_error('password') ?>
            <input type="submit" name="btn_change_pass" value="ĐỔI MẬT KHẨU">
            <?php echo form_error('change_pass') ?>
        </form>
        <a href="?mod=users&controller=index&action=reg" class="reg">ĐĂNG KÝ</a>
        <a href="" class="forget_pass">Quên mật khẩu</a>
    </div>
</body>

</html>