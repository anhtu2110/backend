<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận dữ liệu form từ hidden field</title>
</head>

<body>
    <?php
    function show_array($data)
    {
        if (is_array($data)) {
            echo "<pre>";
            print_r($data);
            echo "<pre>";
        }
    }
    if (isset($_POST['btn_login'])) {
        $error = array();
        $info_user = array(
            'username' => 'admin',
            'password' => 'admin!@#',
        );
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống Tên đăng nhập.";
        } else {
            $username = $_POST['username'];
        }

        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống mật khẩu";
        } else {
            $password = $_POST['password'];
        }
        /*
        *B1: Kiểm tra dữ liệu
        *B2: Gán dữ liệu
        *B3: Kiểm tra login
        *B4:Xử lý login
        --Chuyển hướng cart.php
        --Thông báo: lỗi đăng nhập
        */
        if (empty($error)) {
            if ($username == $info_user['username'] && $password == $info_user['password']) {
                $redirect_to = $_POST['redirect_to'];
                header("Location: {$redirect_to}");
            } else {
                $error['login'] = "Tài khoản không đúng. Vui lòng đăng nhập lại.";
            }
        } else {
            show_array($error);
        }
    }
    ?>
    <style>
        label,
        input {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <h1>Nhận dữ liệu form từ hidden field</h1>
    <form action="" method="post">
        <label for="username">Name: </label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="hidden" name="redirect_to" value="cart.php">
        <input type="submit" name="btn_login" value="Login">
    </form>
</body>

</html>