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
    }
    ?>
    <style>
        label,
        input {
            display: block;
            margin-block: 8px;
        }
    </style>
    <h1>Đăng ký</h1>
    <form action="" method="post">
        <label for="fullname">Họ và tên: </label>
        <input type="text" name="fullname" id="fullname">
        <label for="username">Tên đăng nhập: </label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <label for="num_phone">Số điện thoại: </label>
        <input type="text" name="num_phone" id="num_phone">
        <input type="submit" name="btn_reg" value="Đăng ký">
    </form>
</body>

</html>