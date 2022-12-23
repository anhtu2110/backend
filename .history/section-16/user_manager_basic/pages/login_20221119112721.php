<?php
require 'lib/validation.php';
?>
<?php
if (isset($_POST['bnt_login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = 'Username không được để trống.';
    } else {
        if (strlen($_POST['username']) < 6 or strlen($_POST['username']) > 32) {
            # code...
        } else {
            # code...
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/login.css">
    <title>Trang đăng nhập</title>
</head>

<body>
    <div id="wp-form-login">
        <h1>Đăng nhập</h1>
        <form id="form-login" action="" method="post">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" name="btn_login" value="ĐĂNG NHẬP">
        </form>
        <a href="">Quên mật khẩu</a>
    </div>
</body>

</html>