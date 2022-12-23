<?php
ob_start();
session_start();
?>
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
    require './lib/validation.php';
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

        if (isset($_POST['remember_me'])) {
            echo $_POST['remember_me'];
        }
        //Kết luận
        if (empty($error)) {
            $user = array(
                'username' => 'daoanhtu2110',
                'password' => 'Anhtu21102003',
            );
            //Xử lý không có lỗi
            if ($username == $user['username'] && $password == $user['password']) {
                if (isset($_POST['remember_me'])) {
                    setcookie('is_login', 'true', time() + 3600);
                    setcookie('user_login', 'unitop', time() + 3600);
                }
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                header("Location: index.php");
            } else {
                $error['login'] = "Tài khoản không chính xác. Vui lòng đăng nhâp lại.";
            }
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

        input#remember_me {
            display: inline-block;
        }

        label[for='remember_me'] {
            display: inline-block;
        }
    </style>
    <h1>Đăng nhập</h1>
    <form action="" method="post">
        <label for="username">Name: </label>
        <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>">
        <?php echo form_error('username'); ?>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
        <?php echo form_error('password') ?>
        <?php echo form_error('login') ?>
        <input type="checkbox" name="remember_me" id="remember_me" <?php if (isset($_POST['remember_me'])) echo 'checked' ?>>
        <label for="remember_me">Ghi nhớ đăng nhập</label>
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>