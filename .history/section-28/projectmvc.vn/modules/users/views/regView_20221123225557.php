<?php
global $error, $fullname, $username, $email;
if (isset($_POST['btn_reg'])) {
    $error = array();
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Fullname không được để trống.";
    } else {
        if (strlen($_POST['fullname']) < 6 && strlen($_POST['fullname']) > 32) {
            $error['fullname'] = "Fullname có độ dài từ 6-32 ký tự.";
        } else {
            $fullname = $_POST['fullname'];
        }
    }

    if (empty($_POST['username'])) {
        $error['username'] = 'Username không được để trống.';
    } else {
        if (strlen($_POST['username']) < 6 or strlen($_POST['username']) > 32) {
            $error['username'] = "Username có độ dài từ 6-32 ký tự.";
        } else {
            if (is_username($_POST['username'])) {
                $username = $_POST['username'];
            } else {
                $error['username'] = 'Username không đúng định dạng.';
            }
        }
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Password không được để trống.';
    } else {
        if (strlen($_POST['password']) < 6 or strlen($_POST['password']) > 32) {
            $error['password'] = "Password có độ dài từ 6-32 ký tự.";
        } else {
            if (is_password($_POST['password'])) {
                $password = $_POST['password'];
            } else {
                $error['password'] = 'Password không đúng định dạng.';
            }
        }
    }
    if (empty($_POST['email'])) {
        // $error['email'] = "Email không được để trống";
    } else {
        # code...
    }


    #Kết luận
    if (empty($error)) {
        if (check_login()) {
            #Lưu trữ phiên đăng nhập
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            if (isset($_POST['remember_me'])) {
                setcookie('is_login', true, time() + 3600);
                setcookie('user_login', $username, time() + 3600);
                // $_SESSION['is_login'] = $_COOKIE['is_login'];
                // $_SESSION['user_login'] = $_COOKIE['user_login'];
            }
            redirect_to('?page=home');
        } else {
            $error['login'] = "Tài khoản không tồn tại trên hệ thống.";
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
            <input type="email" name="email" id="email" placeholder="Email">
            <?php echo form_error('email') ?>
            <?php echo form_error('email') ?>
            <input type="submit" name="btn_reg" value="ĐĂNG KÝ">
            <?php echo form_error('login') ?>
        </form>
    </div>
</body>

</html>